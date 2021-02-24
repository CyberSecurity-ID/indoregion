<?php

/*
 * This file is part of the IndoRegion package.
 *
 * (c) Azis Hapidin <azishapidin.com | azishapidin@gmail.com>
 *
 */

namespace AzisHapidin\IndoRegion;

class IndoRegion
{
    private $province;
    private $regency;
    private $district;
    private $village;


    public function __construct()
    {
        $this->province = app(config('indoregion.models.province'));
        $this->regency = app(config('indoregion.models.regency'));
        $this->district = app(config('indoregion.models.district'));
        $this->village = app(config('indoregion.models.village'));
    }

    /**
     * get province instance.
     *
     * @return Province
     */
    public function getAllProvince()
    {
        return $this->province->query()->get();
    }

    /**
     * search province by name.
     *
     * @param String $name String of province
     * @return items of Province 
     */
    public function searchProvinceByName($name = '')
    {
        return $this->province->where("name", "like", "%".$name."%")->get();
    }

    /**
     * find province by id.
     *
     * @param int $id Id of province
     * @return Province 
     */
    public function findProvinceById($id)
    {
        return $this->province->find($id);
    }
}