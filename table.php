<?php

/**
 * Třída která vygeneruje tabulku pomocí jazyku PHP.
 *
 * @author Mirek Novotný <strutter.nov@seznam.cz>
 * @version 1.0
 * @package Tvorba tabulky v PHP
 */
class table {

    /**
     * Zde se ukládají nadpisi do pole
     * @var array 
     */
    private $headers = array();

    /**
     * Tady jsou uloženy data jednotlivých řádků
     * @var array 
     */
    private $data = array();

    /**
     * Nadpise celé tabulky
     * @var string 
     */
    private $name;

    /**
     * Konstruktor třídy.
     * @param string $name Musíte zadt nadpis pro tabulku.
     */
    function __construct($name) {
        $this->name = $name;
    }

    /**
     * Nastavení nadpisů pro jednotlivé sloupce.
     * @param array $data Zadejte do pole nadpisy jednotlivých sloupců (jsou z leva do prava).
     */
    function headers($data) {
        $this->headers = $data;
    }

    /**
     * Přidávání rádků tabulky.
     * @param array $data Zadávejte do pole obsahy jednotlivých buněk. (z leva do prava).
     */
    function linedata($data) {
        $this->data[] = $data;
    }

    /**
     * Vygeneruje tabulku
     * @return string Vrátí vygenerovanou tabulku.
     */
    function __toString() {
        $vratit = "<table>";
        $vratit .= "<caption>";
        $vratit .= $this->name;
        $vratit .= "</caption>";
        $vratit .= "<tr>";
        foreach ($this->headers as $header) {
            $vratit .= "<th>";
            $vratit .= $header;
            $vratit .= "</th>";
        }
        $vratit .= "</tr>";
        foreach ($this->data as $radek) {
            $vratit .= "<tr>";
            foreach ($radek as $data) {
                $vratit .= "<td>";
                $vratit .= $data;
                $vratit .= "</td>";
            }
            $vratit .= "</tr>";
        }
        $vratit .= "</table>";
        return $vratit;
    }

}
