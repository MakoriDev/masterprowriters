<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPageController extends Controller
{
    public function index()
    {
        return view('static-page.index');
    }


    public function getPaperType()
    {
        return response()->json([
            'Abstract',
            'Academic Report',
            'Admission Essay',
            'Analysis Paper',
            'Annotated Bibliography',
            'Argumentative Essay',
            'Article',
            'Article Critique',
            'Article Review',
            'Assessment',
            'Autobiography',
            'Biographies',
            'Book/Movie Review',
            'Book/Movie Review',
            'Business Report',
            'Capstone Project',
            'Case Study',
            'Case Brief Writing',
            'Cause/Effect Analysis',
            'Course Work',
            'Creative Writing',
            'Critical Thinking',
            'Critique Writing',
            'Discussion Post',
            'Dissertation',
            'Dissertation Chapter - Literature Review',
            'Editing/ Proofreading',
            'Essay',
            'Extended Essay Writing',
            'Fact Sheets',
            'Finance &amp; Accounting Assignment',
            'Homework',
            'IB Extended Essay',
            'IB Internal Assessment',
            'IB PPD Form',
            'IB Theatre Directors Notebook',
            'IB TOK Essay',
            'IB TOK Exhibition',
            'Internal Assessment',
            'Lab Report',
            'Letter',
            'Literature Review',
            'Marketing Plan',
            'Memo',
            'Outline',
            'Personal Statement',
            'Persuasive Essay',
            'Programming Assignment',
            'Proposal',
            'Position Paper',
            'Power Point Presentation',
            'Problem-Solving',
            'Question-Answer',
            'Reaction Paper',
            'Resume',
            'Research Paper',
            'Research Proposal',
            'Rhetorical Analysis',
            'Speech',
            'Summary',
            'Thesis',
            'Thesis - Chapter',
            'Thesis Proposal',
            'Term Paper',
            'Theory of Knowledge',
            'Write My Essay for Me',
            'Write My Capstone Project'
        ]);
    }
}
