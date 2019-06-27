<?php

class ProjetsReview{

    private $id;
    private $nom;
    private $date;
    private $image;

    public function __construct($id, $nom, $date, $image){
        $this->id = $id;
        $this->nom = $nom;
        $this->date = $date;
        $this->image = $image;
    }

    public function createPreview($desc){
        return "<div class=\"col-md-4 text-center animate-box\">
					<a href=\"projets.php?id={$this->id}\" class=\"work\" style=\"background-image: url({$this->image});\">
						<div class=\"desc\">
							<h3>{$this->date}</h3>
							<h4>{$this->nom}</h4>
							<span>{$desc}</span>
						</div>
					</a>
				</div>";
    }
}