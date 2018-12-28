<?php

namespace App;

// Product model that represents the products

use Illuminate\Database\Eloquent\Model;   // The Product class extends the Eloquent Model class that binds it to the database tables

class Product extends Model             // Product Model representing product items in the database 'product' table
{
    protected $fillable = ['name', 'description', 'imagePath', 'price'];    // array variable that stores all properties of the model fillable by the user

}
