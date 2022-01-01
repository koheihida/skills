<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;

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

    public function new()
    {
        return view('skill.new');
    }

    public function create(Request $request)
    {
        $skill = new Skill();
        $skill->skill_name = $request->input('skill_name');
        $skill->skill_status = $request->input('skill_status');
        $skill->save();

        return redirect('skill')->with('status', 'スキルを作成しました！！');
    }
}

