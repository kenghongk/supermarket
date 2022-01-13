<?php

declare(strict_types = 1);

namespace App\Charts;

use Chartisan\PHP\Chartisan;
use ConsoleTVs\Charts\BaseChart;
use Illuminate\Http\Request;
use App\Models\Order;
use Carbon\Carbon;

class SalebydayChart extends BaseChart
{
    /**
     * Handles the HTTP request for the given chart.
     * It must always return an instance of Chartisan
     * and never a string or an array.
     */
    public ?string $name = 'salebydaychart';

    public ?string $routeName = 'salebydaychart';

    public function handler(Request $request): Chartisan
    {

    $dt = Carbon::now();
    $one_week_ago = $dt->subDays(7);
    $labels = [];
    $count = [];

    $sales = DB::table('orders')
      ->where('status', 'Delivered')
      ->where('created_at', '>', $one_week_ago)
      ->orderBy('created_at', 'asc')
      ->select(DB::raw("DATE_FORMAT(created_at, '%e-%c') as date"), DB::raw('SUM(`price`) as 
      total'))
      ->groupBy(DB::raw("DATE_FORMAT(created_at, '%Y %m %e')"))
      ->get();

      
      foreach ($sales as $sale) {
        array_push($labels, $sale->date);
        array_push($count, $sale->total);
      }

      return Chartisan::build()
        ->labels($labels)
        ->dataset('Sample', $count);
    }
}