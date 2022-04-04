<?php

// W skrypcie definicji kontrolera nie trzeba dołączać już niczego.
// Kontroler wskazuje tylko za pomocą 'use' te klasy z których jawnie korzysta
// (gdy korzysta niejawnie to nie musi - np używa obiektu zwracanego przez funkcję)
// Zarejestrowany autoloader klas załaduje odpowiedni plik automatycznie w momencie, gdy skrypt będzie go chciał użyć.
// Jeśli nie wskaże się klasy za pomocą 'use', to PHP będzie zakładać, iż klasa znajduje się w bieżącej
// przestrzeni nazw - tutaj jest to przestrzeń 'app\controllers'.
// Przypominam, że tu również są dostępne globalne funkcje pomocnicze - o to nam właściwie chodziło

namespace app\controllers;

//zamieniamy zatem 'require' na 'use' wskazując jedynie przestrzeń nazw, w której znajduje się klasa
use app\forms\CalcForm;
use app\utilities\CalcResult;

/** Kontroler kalkulatora
 * @author Przemysław Kudłacik
 *
 */
class CalcCtrl {

    private $form;   //dane formularza (do obliczeń i dla widoku)
    private $result; //inne dane dla widoku

    private $firstRun = true;
    /**
     * Konstruktor - inicjalizacja właściwości
     */
    public function __construct() {
        //stworzenie potrzebnych obiektów
        $this->form = new CalcForm();
        $this->result = new CalcResult();
    }

    /**
     * Pobranie parametrów
     */
    public function getParams() {
        $this->form->amt = getFromRequest('amt');
        $this->form->yrs = getFromRequest('yrs');
        $this->form->rt = getFromRequest('rt');
    }

    /**
     * Walidacja parametrów
     * @return true jeśli brak błedów, false w przeciwnym wypadku 
     */
    public function validate() {
        // sprawdzenie, czy parametry zostały przekazane
        if (!(isset($this->form->amt) && isset($this->form->yrs) && isset($this->form->rt))) {
            // sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
            return false;
        }

        // sprawdzenie, czy potrzebne wartości zostały przekazane
        if ($this->form->amt == "") {
            getMessages()->addError('Nie podano kwoty');
        }
        if ($this->form->yrs == "") {
            getMessages()->addError('Nie podano liczby lat');
        }
        if ($this->form->rt == "") {
            getMessages()->addError('Nie podano oprocentowania');
        }

        // nie ma sensu walidować dalej gdy brak parametrów
        if (!getMessages()->isError()) {

            // sprawdzenie, czy $x i $y są liczbami całkowitymi
            if (!is_numeric($this->form->amt)) {
                getMessages()->addError('Kwota musi być liczbą całkowitą');
            }

            if (!is_numeric($this->form->yrs)) {
                getMessages()->addError('Liczba lat musi być liczbą całkowitą');
            }

            if (!is_numeric($this->form->rt)) {
                getMessages()->addError('Oprocentowanie musi być liczbą całkowitą');
            }
        }

        return !getMessages()->isError();
    }

    /**
     * Pobranie wartości, walidacja, obliczenie i wyświetlenie
     */
    public function action_calcCompute() {

        $this->getparams();

        if ($this->validate()) {

            //konwersja parametrów na int
            $this->form->amt = intval($this->form->amt);
            $this->form->yrs = intval($this->form->yrs);
            $this->form->rt = intval($this->form->rt);
            getMessages()->addInfo('Parametry poprawne.');

            //wykonanie operacji
            $amount = $this->form->amt;
            $years = $this->form->yrs * 12;
            $rate = $this->form->rt / 100;

            $result = ($amount * $rate) / (12 * (1 - ((12 / (12 + $rate)) ** $years))); //wzór na raty równe
            $this->result->result = number_format($result, 2, ',', ' '); //zaokrąglanie do 2 miejsc po przecinku - ? notacja francuska ?

            getMessages()->addInfo('Wykonano obliczenia.');
        }

        $this->generateView();
    }

    public function action_calcShow() {
        $this->generateView();
    }

    /**
     * Wygenerowanie widoku
     */
    public function generateView() {

        getSmarty()->assign('user', unserialize($_SESSION['user']));

        getSmarty()->assign('page_title', 'Super kalkulator');

        getSmarty()->assign('form', $this->form);
        getSmarty()->assign('res', $this->result);

        getSmarty()->display('CalcView.tpl');
    }

}
