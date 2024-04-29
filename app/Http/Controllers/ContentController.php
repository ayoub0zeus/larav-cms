<?php

namespace App\Http\Controllers;
use App\Models\Skill;
use Illuminate\Support\Str;
use App\Models\Content;
use App\Models\Education;
use App\Models\Experience;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    public function index(){
        $contents = Content::all();
        $skills = Skill::all();
        $skills = Skill::all();
        $experiences = Experience::all();
        $educations = Education::all();
        return view('index' ,compact('contents','skills','experiences','skills','educations'));
    }
    
    // public function adminIndex(){    
    //     return view("admin.admin" );     
    // }

    public function edit($id){
        $content = Content::findOrFail($id);
        return view('admin.edit', compact('content'));
    }
    
    public function update(Request $request, $id){
        $content = Content::findOrFail($id);
        $data = $request->validate([
            'username' => 'required',
            'job' => 'required',
            'email' => 'required',
            'adress' => 'required',
            'phone' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', 
        ]);
    
        if ($request->hasFile('image')) {
            $imageName = Str::random(32) . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path('storage'), $imageName);
            $data['image'] = $imageName;
        }
        $content->update($data);
        return 'Item has been changed successfully. <a href="' . route('accueil') . '">Look at the changes</a>.';
    }
   

    // skills 
    public function showSkills(){
        $skills = Skill::all();
        return view('admin.skills.display-skills', compact('skills'));
    }
    
    public function editSkills($id){
        $skill = Skill::findOrFail($id);
        $colors = ['primary', 'secondary', 'success', 'danger', 'warning', 'info', 'light', 'dark'];
        return view('admin.skills.edit-skills', compact('skill', 'colors'));
    }
    
    public function updateSkills(Request $request, $id){
        $skill = Skill::findOrFail($id);
        $data = $request->validate([
            'skills' => 'required',
            'skills_color' => 'required',
            'skills_perstentage' => 'required',
        ]);
        $skill->update($data);
        return 'Skill has been updated successfully. <a href="' . route('showskills') . '">Go back</a>.';
    }


    // experience 
    public function showExperience (){
        $experiences = Experience::all();
        return view('admin.experience.display-experiences', compact('experiences'));
    }

    public function editExperience($id){
        $experience = Experience::findOrFail($id);
        return view('admin.experience.edit-experiences', compact('experience'));
    }

    public function updateExperience(Request $request, $id){
        $experience = Experience::findOrFail($id);
        $data = $request->validate([
            'Exprience_name' => 'required',
            'Exprience_company' => 'required',
            'Exprience_date' => 'required',
        ]);
        $experience->update($data);
        return 'Experience has been updated successfully. <a href="' . route('showExperience') . '">Go back</a>.';
    }

    // education 
    public function showEducation (){
        $educations = Education::all();
        return view('admin.education.display-education', compact('educations'));
    }

    public function editEducation($id){
        $education = Education::findOrFail($id);
        return view('admin.education.edit-education', compact('education'));
    }

    public function updateEducation(Request $request, $id){
        $education = Education::findOrFail($id);
        $data = $request->validate([
            'Education_name' => 'required',
            'Education_company' => 'required',
            'Education_years' => 'required',
        ]);
        $education->update($data);
        return 'Education has been updated successfully. <a href="' . route('showEducation') . '">Go back</a>.';
    }

    
}
