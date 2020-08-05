<?php

use App\Image;
use App\Produit;
use Illuminate\Database\Seeder;

class ProduitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $produits=factory(Produit::class,20)->create();
        foreach ($produits as $produit){
            Image::create([
                'produit_id'=>$produit->id,
                'chemin'=>'placeholder.jpeg'
            ]);
        }
    }
}
