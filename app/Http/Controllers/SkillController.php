<?php

namespace App\Http\Controllers;

use App\Models\Skill;

class SkillController extends Controller
{
    public function index()
    {
        $skills = Skill::paginate(2);
        
        return view('skill.index', [
            'skills' => $skills
        ]);
    }
}
