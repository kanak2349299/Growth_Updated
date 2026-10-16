<?php

namespace App\Models;

use CodeIgniter\Model;

class CommonModel extends Model
{

	public function insertData($table,$data=array())
	{
      $query = $this->db->table($table);
	  $result = $query->insert($data);
      return  $this->db->insertID();
	}

	public function updateData($table,$data =array(),$condition= array())
	{
			$query = $this->db->table($table);
			return  $query->update($data, $condition);
		 
	}

	public function deleteData($table,$condition =array())
	{
			$query= $this->db->table($table);
			return  $query->delete($condition);  
	}
	
	// fetch single record
	public function fs($table,$condition= array())
	{
		$query= $this->db->table($table);
		return $query->getWhere($condition)->getrow();
	}

	public function fs_desc($table,$condition= array(),$column = 'id',$sort_order = 'desc')
	{
		$query= $this->db->table($table);
		return $query->orderBy($column,$sort_order)->getWhere($condition)->getrow();
	}
    public function getLastQuery() {
            return $this->db->last_query();
        }
	public function allFetch($table,$condition= array(),$column = 'id',$sort_order = 'asc',$limit = NULL,$offset = NULL)
	{		
		$query= $this->db->table($table);
		return $query->orderBy($column,$sort_order)->getWhere($condition,$limit,$offset)->getResult();
	}
    public function allFetchd($table,$condition= array(),$column = 'id',$sort_order = 'desc',$limit = NULL,$offset = NULL)
	{		
		$query= $this->db->table($table);
		return $query->orderBy($column,$sort_order)->getWhere($condition,$limit,$offset)->getResult();
		
	}
    public function all_fetch_array($table,$condition= array(),$column = 'id',$sort_order = 'asc',$limit = NULL,$offset = NULL)
	{		
		$query= $this->db->table($table);
		return $query->orderBy($column,$sort_order)->getWhere($condition,$limit,$offset)->getResult('array');
		
	}

	public function allCount($table,$condition= array())
	{
		$query= $this->db->table($table);
		return $query->where($condition)->countAllResults();
		
	}
		public function all_fetcharray($table,$condition= array(),$limit = NULL,$offset = NULL)
	{
		$query= $this->db->table($table);

		return $query->getWhere($condition,$limit,$offset)->getResultArray();
		
	}
	
	public function all_fetch_grp($table,$condition= array(),$col = NULL)
	{
		$query = $this->db->table($table);
		$query->select('*');
		$query->groupBy($col);
		return $query->getWhere($condition)->getResult();
		 
	}

		public function fsarray($table,$condition= array())
	{
		$query= $this->db->table($table);
		return $query->getWhere($condition)->getRowArray();
		
	}
	public function printStateName($stateid)
	{
	    $pr=$this->fs('xyz_states',array('id'=>$stateid));
	    echo $pr->name;
	}
	public function printCityName($cityid)
	{
	    $pr=$this->fs('xyz_cities',array('id'=>$cityid));
	    echo $pr->city;
	}
	public function getProductPrice($productid)
	{
	      $pr=$this->fs('xyz_products',array('id'=>$productid));
	      $category=$pr->cat;  
	      $making=$pr->making; 
          $hwcharge=$pr->hallmark;
          $other=$pr->other;
          $karat= $pr->karat;
          $gweight=$pr->goldweight;
          $netwt=$pr->netwt;
          $getkaratrate=$this->fs('xyz_rates',array('category'=>$karat));
          $karatrate=$getkaratrate->rate;
        if($category=='diamond')
        {
          $diamondrate=$pr->diamondrate;
          $diamondweight=$pr->diamondweight;
        
          $finalrate=(($karatrate+$making)*$gweight)+$hwcharge+$other+($diamondrate*$diamondweight);
        }
        else if($category=='gold')
        {
            $finalrate=($netwt*$karatrate)+$hwcharge+(($netwt*$karatrate)*($making/100))+$other;
        }
          $gstam=($finalrate*3)/100;
          $finaldiamondamount=$finalrate+$gstam;
          echo $finalamount=round($finaldiamondamount);
	}
	
	public function getProductPriceCart($productid)
	{
	      $pr=$this->fs('xyz_products',array('id'=>$productid));
	      $category=$pr->cat;  
	      $making=$pr->making; 
          $hwcharge=$pr->hallmark;
          $other=$pr->other;
          $karat= $pr->karat;
          $gweight=$pr->goldweight;
          $netwt=$pr->netwt;
          $getkaratrate=$this->fs('xyz_rates',array('category'=>$karat));
          $karatrate=$getkaratrate->rate;
        if($category=='diamond')
        {
          $diamondrate=$pr->diamondrate;
          $diamondweight=$pr->diamondweight;
        
          $finalrate=(($karatrate+$making)*$gweight)+$hwcharge+$other+($diamondrate*$diamondweight);
        }
        else if($category=='gold')
        {
            $finalrate=($netwt*$karatrate)+$hwcharge+(($netwt*$karatrate)*($making/100))+$other;
        }
          $gstam=($finalrate*3)/100;
          $finaldiamondamount=$finalrate+$gstam;
         return $finalamount=round($finaldiamondamount);
	}
    
    
    function generateToken($length = 15) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    
    for ($i = 0; $i < $length; $i++) {
        $randomIndex = random_int(0, $charactersLength - 1);
        $randomString .= $characters[$randomIndex];
    }
    
    return $randomString;
}

public function allSearch($table, $conditions = [])
{
    $builder = $this->db->table($table);

    foreach ($conditions as $field => $value) {
        $builder->like($field, $value, 'both'); // 'both' adds % on both sides
    }

    return $builder->get()->getResult();
}




//end here
}
