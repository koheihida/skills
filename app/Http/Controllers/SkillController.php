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

    public function detail($id)
    {
        $skill = Skill::find($id);

        return view('skill.detail', [
            'skill' => $skill
        ]);
    }
}

