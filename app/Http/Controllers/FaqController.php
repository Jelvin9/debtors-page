<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Managers\FaqManager;

class FaqController extends Controller
{
    protected $faqManager;

    public function __construct(FaqManager $faqManager)
    {
        $this->faqManager = $faqManager;
    }

    public function index()
    {
        $faqs = $this->faqManager->getAllFaqs();

        return view('faq.index', ['faqs' => $faqs]);
    }

    public function loadContent($topic)
    {
        switch($topic){
            case 'payment':
                return view('faq.payment_guide');
            case 'rights':
                return view('faq.rights');
            case 'obligations':
                return view('faq.obligations');
            case 'faq':
                $faqs = $this->faqManager->getAllFaqs();
                return view('faq.faq', ['faqs' => $faqs]);
            case 'contact':
                return view('faq.contact');
        }
    }
}
