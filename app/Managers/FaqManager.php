<?php

namespace App\Managers;

use App\Models\Faq;

class FaqManager
{
    public function getAllFaqs()
    {
        return Faq::all();
    }
}
