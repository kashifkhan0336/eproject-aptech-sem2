<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Media;
class MediaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Media::factory()
            ->sequence([
                'id'=>1,
                'model_type'=>'App\\Models\\Product',
                'model_id'=>1,
                'uuid'=>'b1f4b6fa-e7f0-4d6f-bffa-b4d274da71a5',
                'collection_name'=>'main-image',
                'name'=>'611W9Ia9hyL._AC_SX466_',
                'file_name'=>'79YIKoPnDByUbwYg1Aspn3GS6lv4to-metaNjExVzlJYTloeUwuX0FDX1NYNDY2Xy5qcGc=-.jpg',
                'mime_type'=>'image/jpeg',
                'disk'=>'public',
                'conversions_disk'=>'public',
                'size'=>21658,
                'manipulations'=>'[]',
                'custom_properties'=>'[]',
                'generated_conversions'=>'[]',
                'responsive_images'=>'{\"media_library_original\":{\"urls\":[\"79YIKoPnDByUbwYg1Aspn3GS6lv4to-metaNjExVzlJYTloeUwuX0FDX1NYNDY2Xy5qcGc=-___media_library_original_466_425.jpg\",\"79YIKoPnDByUbwYg1Aspn3GS6lv4to-metaNjExVzlJYTloeUwuX0FDX1NYNDY2Xy5qcGc=-___media_library_original_389_355.jpg\",\"79YIKoPnDByUbwYg1Aspn3GS6lv4to-metaNjExVzlJYTloeUwuX0FDX1NYNDY2Xy5qcGc=-___media_library_original_326_297.jpg\"],\"base64svg\":\"data:image\\/svg+xml;base64,PCFET0NUWVBFIHN2ZyBQVUJMSUMgIi0vL1czQy8vRFREIFNWRyAxLjEvL0VOIiAiaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkIj4KPHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbDpzcGFjZT0icHJlc2VydmUiIHg9IjAiCiB5PSIwIiB2aWV3Qm94PSIwIDAgNDY2IDQyNSI+Cgk8aW1hZ2Ugd2lkdGg9IjQ2NiIgaGVpZ2h0PSI0MjUiIHhsaW5rOmhyZWY9ImRhdGE6aW1hZ2UvanBlZztiYXNlNjQsLzlqLzRBQVFTa1pKUmdBQkFRRUFZQUJnQUFELy9nQTdRMUpGUVZSUFVqb2daMlF0YW5CbFp5QjJNUzR3SUNoMWMybHVaeUJKU2tjZ1NsQkZSeUIyT0RBcExDQnhkV0ZzYVhSNUlEMGdPVEFLLzlzQVF3QURBZ0lEQWdJREF3TURCQU1EQkFVSUJRVUVCQVVLQndjR0NBd0tEQXdMQ2dzTERRNFNFQTBPRVE0TEN4QVdFQkVURkJVVkZRd1BGeGdXRkJnU0ZCVVUvOXNBUXdFREJBUUZCQVVKQlFVSkZBMExEUlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVS84QUFFUWdBSFFBZ0F3RWlBQUlSQVFNUkFmL0VBQjhBQUFFRkFRRUJBUUVCQUFBQUFBQUFBQUFCQWdNRUJRWUhDQWtLQy8vRUFMVVFBQUlCQXdNQ0JBTUZCUVFFQUFBQmZRRUNBd0FFRVFVU0lURkJCaE5SWVFjaWNSUXlnWkdoQ0NOQ3NjRVZVdEh3SkROaWNvSUpDaFlYR0JrYUpTWW5LQ2txTkRVMk56ZzVPa05FUlVaSFNFbEtVMVJWVmxkWVdWcGpaR1ZtWjJocGFuTjBkWFozZUhsNmc0U0Zob2VJaVlxU2s1U1ZscGVZbVpxaW82U2xwcWVvcWFxeXM3UzF0cmU0dWJyQ3c4VEZ4c2ZJeWNyUzA5VFYxdGZZMmRyaDR1UGs1ZWJuNk9ucThmTHo5UFgyOS9qNSt2L0VBQjhCQUFNQkFRRUJBUUVCQVFFQUFBQUFBQUFCQWdNRUJRWUhDQWtLQy8vRUFMVVJBQUlCQWdRRUF3UUhCUVFFQUFFQ2R3QUJBZ01SQkFVaE1RWVNRVkVIWVhFVElqS0JDQlJDa2FHeHdRa2pNMUx3RldKeTBRb1dKRFRoSmZFWEdCa2FKaWNvS1NvMU5qYzRPVHBEUkVWR1IwaEpTbE5VVlZaWFdGbGFZMlJsWm1kb2FXcHpkSFYyZDNoNWVvS0RoSVdHaDRpSmlwS1RsSldXbDVpWm1xS2pwS1dtcDZpcHFyS3p0TFcydDdpNXVzTER4TVhHeDhqSnl0TFQxTlhXMTlqWjJ1TGo1T1htNStqcDZ2THo5UFgyOS9qNSt2L2FBQXdEQVFBQ0VRTVJBRDhBOTErTkg3VWNseGVQcFZqS0xXVmVEdXJ5Znc5KzBkck9nYWdTN2lWYy9lRmVhL3RhMkQrSHZpVk9JOG9ENmNWNC9aZUo1NEdCOHd0OWErZnhVUGJPMDFleCs1VU9Ec0hqTUxERVVKT0xrajlKUEJQN1lGdGNDT085SVU5ODE3djRRK01HaytLa1h5SlZMSDBOZmt2NFY4Ung2cGV4d1MvS1Nlb3I3RC9acXRwWDFWWWxrWjR4MDVybFZhclF0eXlmVFI2bjU5bk9TVHltdkdsVmtwYzEvSmxMOXNmOW1iWFBHbXNuVjlKaE1vQTVWUlh3dDRsK0h1dmVFcmg0cit3bWlLbkJKVTRyOTJacmFPWlNycUdCN0VWNTk0NytEWGhmeGZhU0MrMDZKaXdQekJSbXZvS2xCU2QwZTVrdkdkWEFVNDRldkRtaXZ2UHhnOEkzTHdhMURuSU80ZGEvUjM5a25UamNTSk9SMjYxNUI4WHYyZGZEUGhYeFBCSllDU0xkSVBsQUdPdGZZUDdQM2d1dzhQZUc3YVMzQkxzZ3lUWG16dzBwemo1TXk0c3pPam1GYWppS1NkdVZuLy9aIj4KCTwvaW1hZ2U+Cjwvc3ZnPg==\"}}',
                'order_column'=>1,
                'created_at'=>'2022-10-04 04:57:50',
                'updated_at'=>'2022-10-04 04:57:51'
            ],[
                'id'=>2,
                'model_type'=>'App\\Models\\Product',
                'model_id'=>2,
                'uuid'=>'58486e3f-2562-43ef-b397-84d6e89f5e62',
                'collection_name'=>'main-image',
                'name'=>'81LVskr+-hL._AC_SY879_',
                'file_name'=>'d3Zr7QIulWLqWhwgK9l7Gszs2hxZam-metaODFMVnNrcistaEwuX0FDX1NZODc5Xy5qcGc=-.jpg',
                'mime_type'=>'image/jpeg',
                'disk'=>'public',
                'conversions_disk'=>'public',
                'size'=>67351,
                'manipulations'=>'[]',
                'custom_properties'=>'[]',
                'generated_conversions'=>'[]',
                'responsive_images'=>'{\"media_library_original\":{\"urls\":[\"d3Zr7QIulWLqWhwgK9l7Gszs2hxZam-metaODFMVnNrcistaEwuX0FDX1NZODc5Xy5qcGc=-___media_library_original_550_879.jpg\",\"d3Zr7QIulWLqWhwgK9l7Gszs2hxZam-metaODFMVnNrcistaEwuX0FDX1NZODc5Xy5qcGc=-___media_library_original_460_735.jpg\",\"d3Zr7QIulWLqWhwgK9l7Gszs2hxZam-metaODFMVnNrcistaEwuX0FDX1NZODc5Xy5qcGc=-___media_library_original_384_614.jpg\",\"d3Zr7QIulWLqWhwgK9l7Gszs2hxZam-metaODFMVnNrcistaEwuX0FDX1NZODc5Xy5qcGc=-___media_library_original_322_515.jpg\",\"d3Zr7QIulWLqWhwgK9l7Gszs2hxZam-metaODFMVnNrcistaEwuX0FDX1NZODc5Xy5qcGc=-___media_library_original_269_430.jpg\",\"d3Zr7QIulWLqWhwgK9l7Gszs2hxZam-metaODFMVnNrcistaEwuX0FDX1NZODc5Xy5qcGc=-___media_library_original_225_360.jpg\"],\"base64svg\":\"data:image\\/svg+xml;base64,PCFET0NUWVBFIHN2ZyBQVUJMSUMgIi0vL1czQy8vRFREIFNWRyAxLjEvL0VOIiAiaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkIj4KPHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbDpzcGFjZT0icHJlc2VydmUiIHg9IjAiCiB5PSIwIiB2aWV3Qm94PSIwIDAgNTUwIDg3OSI+Cgk8aW1hZ2Ugd2lkdGg9IjU1MCIgaGVpZ2h0PSI4NzkiIHhsaW5rOmhyZWY9ImRhdGE6aW1hZ2UvanBlZztiYXNlNjQsLzlqLzRBQVFTa1pKUmdBQkFRRUFZQUJnQUFELy9nQTdRMUpGUVZSUFVqb2daMlF0YW5CbFp5QjJNUzR3SUNoMWMybHVaeUJKU2tjZ1NsQkZSeUIyT0RBcExDQnhkV0ZzYVhSNUlEMGdPVEFLLzlzQVF3QURBZ0lEQWdJREF3TURCQU1EQkFVSUJRVUVCQVVLQndjR0NBd0tEQXdMQ2dzTERRNFNFQTBPRVE0TEN4QVdFQkVURkJVVkZRd1BGeGdXRkJnU0ZCVVUvOXNBUXdFREJBUUZCQVVKQlFVSkZBMExEUlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVS84QUFFUWdBTXdBZ0F3RWlBQUlSQVFNUkFmL0VBQjhBQUFFRkFRRUJBUUVCQUFBQUFBQUFBQUFCQWdNRUJRWUhDQWtLQy8vRUFMVVFBQUlCQXdNQ0JBTUZCUVFFQUFBQmZRRUNBd0FFRVFVU0lURkJCaE5SWVFjaWNSUXlnWkdoQ0NOQ3NjRVZVdEh3SkROaWNvSUpDaFlYR0JrYUpTWW5LQ2txTkRVMk56ZzVPa05FUlVaSFNFbEtVMVJWVmxkWVdWcGpaR1ZtWjJocGFuTjBkWFozZUhsNmc0U0Zob2VJaVlxU2s1U1ZscGVZbVpxaW82U2xwcWVvcWFxeXM3UzF0cmU0dWJyQ3c4VEZ4c2ZJeWNyUzA5VFYxdGZZMmRyaDR1UGs1ZWJuNk9ucThmTHo5UFgyOS9qNSt2L0VBQjhCQUFNQkFRRUJBUUVCQVFFQUFBQUFBQUFCQWdNRUJRWUhDQWtLQy8vRUFMVVJBQUlCQWdRRUF3UUhCUVFFQUFFQ2R3QUJBZ01SQkFVaE1RWVNRVkVIWVhFVElqS0JDQlJDa2FHeHdRa2pNMUx3RldKeTBRb1dKRFRoSmZFWEdCa2FKaWNvS1NvMU5qYzRPVHBEUkVWR1IwaEpTbE5VVlZaWFdGbGFZMlJsWm1kb2FXcHpkSFYyZDNoNWVvS0RoSVdHaDRpSmlwS1RsSldXbDVpWm1xS2pwS1dtcDZpcHFyS3p0TFcydDdpNXVzTER4TVhHeDhqSnl0TFQxTlhXMTlqWjJ1TGo1T1htNStqcDZ2THo5UFgyOS9qNSt2L2FBQXdEQVFBQ0VRTVJBRDhBL1UyNmtFVUx1ZjRSbXZoMzlvUHhoSjRzOFd5NmJIT01RSGhBZWMxOWhlUGZFdHI0YThOM2w1ZFNpTkVqSnlUN1YrUXZ4QjhmNnRyZnhldTczUjdnbU5wU01aNDYxbE5TZGtqM3NyaEgzcHlqZDlEOUJmMlR2RXVwVDI5eHBsOW5iQ2NKbjByNmFIU3ZndjhBWTYrSVYxYitLWjdMV0pRSnBPaE5mZDBOd3N5Z29RUWZTdFR6Y1hUbFRxdFNWajVYL2E1MUs5OFdlRW10dEJ2QTZNTU41YlY4QytIZkNrL2hYVlpyclUxSVpDVytidlgycHIvd3gxYjRiMi9rejNNdDdDZVN6SE5lQmE3cE52OEFFSHgvYjZSRktJdWNPQlY2UlYyZmI0RERSdytCK3N4MVpvZkFYdzdxZnhFOGF4MzJreUdCWW4rWWl2MGw4TGFiUHB1bFFSWERsNVZVQmlhOFIvWjUrQWR2OE5mOUp0MzNDUVpOZlJLRDVSVXQzMlBrY2ZpWlY1M1pqZUl2RGxycjFqTERjUksrNVNCa1YrY3Z4VStIZW8vRFg0emkvd0JQejVVa21lT3d6WDZVNnBjL1pMT2FYcnRVbXZuQzQ4UHgrUGRiMVM5dkl3eGh6c3lLaHg1dFM4SFhyMDZVMUg0SHVleWZDVzhlL3dEQjFqTktjeU1neitWZHNDQlhrZncrOFFKb1BnKzVFamhUYkE0QjlxNDd3djhBdE13NjU0bm0weGdFRWJFYmpXc1lTbHNlZEtsSnQrUjlCYW1vZTBrRERJSVBGZVhhRGJSUmFscUlSQW9JUEFvb3BMWTlYQVA5elVYb2N6YnhxMWhyS0VaVDV1SytjZkFsbkQvd3NhL0hsakFjMFVWMnc2bTJZNlY1VzdJLy85az0iPgoJPC9pbWFnZT4KPC9zdmc+\"}}',
                'order_column'=>1,
                'created_at'=>'2022-10-04 21:12:54',
                'updated_at'=>'2022-10-04 21:12:57'
            ])->create();
        //
    }
}
