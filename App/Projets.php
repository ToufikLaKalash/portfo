<?php
require 'DB.php';

class Projets{
    private $id;
    private $nom;
    private $date;
    private $texte;

    public function __construct($id){
        $this->id = $id;
    }

    private function getDBInformations(){
        $db = DB::getDB();
        $r = $db->query("SELECT * FROM projets WHERE id={$this->id};");
        $r = $r->fetch();
        $this->nom = $r['nom'];
        $this->date = $r['date'];
        $this->texte = $r['texte'];
    }

    public function createProject(){
        $this->getDBInformations();
        return "<div class=\"col-md-4 fh5co-project-detail\">
					<h2 class=\"fh5co-project-title\">{$this->nom}</h2>
					<span class=\"fh5co-project-sub\">{$this->date}</span>

					<div class=\"fh5co-project-service\">
						<h3>Description</h3>
                        <p>{$this->texte}</p>
					</div>
				</div>";
    }

}