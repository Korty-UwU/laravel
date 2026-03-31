 <?php

namespace App\Http\Controllers;

use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class Collection extends Controller{
    public function testCollection()
    {return view('post.showtestCollection',[
        $collection = collect([1, 2, 3]);
    ]);
    }
}
?>
