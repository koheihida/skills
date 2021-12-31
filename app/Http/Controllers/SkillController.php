<?php

namespace App\Http\Controllers;

use App\Models\Skill;

class SkillController extends Controller
{
    public function index()
    {
        $examples = Skill::all();
        return view('skill', [
            'skills' => $skills
        ]);
    }
}
