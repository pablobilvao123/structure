
	namespace App\Models;

	use Illuminate\Database\Eloquent\Model;

	class {{ ucfirst($service) }} extends Model
	{
	    protected $fillable = [@foreach($fillables as $key => $fillable)'{{$fillable}}'@if( count($fillables) -1 != $key),@endif @endforeach];
	}
