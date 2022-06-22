<?php
namespace App\Models;

class Listing {
    public static function all(){
        return [
            [
                'id' => 1,
                'title' => 'Listing One',
                'description' => 'Lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum'
            ],
            [
                'id' => 2,
                'title' => 'Listing Two',
                'description' => 'Lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum'
            ]
        ];
    }

    public static function find($id){
        $listings = self::all();

        foreach($listings as $listing){
            if ($listing['id'] == $id){
                return $listing;
            }
        }
    }
}