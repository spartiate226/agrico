<?php

use App\Categorie;

function getCategories(){
    return Categorie::all();
}
function showErrors($errors){
    if ($errors->any()){

    foreach($errors->all() as $error){
       echo '<div class="form-group">
        <p class="alert alert-dismissible alert-danger">'.$error.'<button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button></p>
        </div>';
    }
   }
}

function showResponse(){
    if(session('reponse')){
     echo  '<div class="form-group">
                    <p class="alert alert-dismissible alert-success">'.session('reponse').' 
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                    </p>
        </div>';
    }
    if(session('pwdNotmatch')){
        echo  '<div class="form-group">
                       <p class="alert alert-dismissible alert-danger">'.session('pwdNotmatch').' 
                           <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                               <span aria-hidden="true">&times;</span>
                             </button>
                       </p>
           </div>';
       }
}

function getCategorie($id){
    return Categorie::find($id);
}
