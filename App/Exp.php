<?php
require 'DB.php';

class Exp{

    private $id;
    private $nom;
    private $date;
    private $lieu;
    private $poste;
    private $texte;

    public function __construct($id){
        $this->id = $id;
    }

    private function getDBInformations(){
        $db = DB::getDB();
        $r = $db->query("SELECT * FROM experiences WHERE id={$this->id};");
        $r = $r->fetch();
        $this->nom = $r['nom'];
        $this->date = $r['date'];
        $this->texte = $r['texte'];
        $this->lieu = $r['lieu'];
        $this->poste = $r['poste'];
    }

    public function createExp(){
        $this->getDBInformations();
        return "<div class=\"col-md-8 col-md-offset-2 text-center animate-box\">
					<div class=\"about-desc\">
						<h3>{$this->nom}</h3>
						<h5>{$this->lieu}, {$this->date}</h5>
						<h4>$this->poste</h4>
						<p>{$this->texte}</p>
					</div>
				</div>";
    }
}