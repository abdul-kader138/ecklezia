<?php
/**
 * Created by PhpStorm.
 * User: rowjat
 * Date: 3/29/2019
 * Time: 4:08 PM
 */

namespace App;


use Illuminate\Support\Collection;

class FamilyGroup
{
    /**
     * @var People
     */
    private $people;

    public function __construct(People $people)
    {
        $this->people = $people;
    }

    public function listGroup(){
       return $this->people->where('family_member_id',NULL)->with('child')->get()->map(function ($item,$key){
            $collect = collect([]);
           $collect->push($this->people->findOrFail($item->id));
           $item['family_member'] = $this->familyMember($item,$collect);
           return $item;
       });
    }
    public function getMyFamilyById($id){
        foreach ($this->listGroup() as $item){
           if($item->family_member->where('id',$id)->first()){
               return $item->family_member->whereNotIn('id',[$id]);
           }
        }
        return null;
    }
    public function familyMember($parent,Collection $collection){
        if($parent->child->count()){
            foreach ($parent->child as $child){
                $collection->push($child);
                $this->familyMember($child,$collection);
            }
        }
        return $collection;
    }

}