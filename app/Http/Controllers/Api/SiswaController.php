<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\User;
use App\Siswa;
use Illuminate\Http\Request;
use Validator;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    // tambahan di controller:
    // use App\Http\Controllers\Controller;

    // simpan di routes->API
    // Route::resource('siswa', 'Api\SiswaController');

    public function index()
    {
        $siswa = Siswa::all();
        if (!$siswa) {
            $response = [
                'success' => false,
                'data' => 'Empty',
                'message' => 'Siswa tidak ditemukan.'
            ];
            return response()->json($response, 404);
        }

        $response = [
            'success' => true,
            'data' => $siswa,
            'message' => 'Berhasil.'
        ];

        return response()->json($response, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // 1. tampung semuan inputan ke $input;
        $input = $request->all();

        // 2. Buat Validasi ditampung ke $validator
        $validator = Validator::make($input, [
            'nama' => 'required|min:15'
        ]);

        // 3. Chek validasi
        if ($validator->fails()) {
            $response = [
                'success' => false,
                'data' => 'Validation Error.',
                'message' => $validator->errors()
            ];
            return response()->json($response, 500);
        }

        // 4. buat fungsi untuk menghandle semua inputan ->
        // dimasukan ke table
        $siswa = Siswa::create($input);

        // 5. menampilkan response
        $response = [
            'success' => true,
            'data' => $siswa,
            'message' => 'Siswa Berhasil ditambahkan.'
        ];

        // 6. tampilkan hasil
        return response()->json($response, 200);

        // 7. menampilkan error di heroku :
        // heroku config:set APP_DEBUG=true
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $siswa = Siswa::find($id);
        if (!$siswa) {
            $response = [
                'success' => false,
                'data' => 'Empty',
                'message' => 'Siswa tidak ditemukan.'
            ];
            return response()->json($response, 404);
        }

        $response = [
            'success' => true,
            'data' => $siswa,
            'message' => 'Berhasil.'
        ];

        return response()->json($response, 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $siswa = Siswa::find($id);
        $input = $request->all();

        if (!$siswa) {
            $response = [
                'success' => false,
                'data' => 'Empty',
                'message' => 'Siswa tidak ditemukan.'
            ];
            return response()->json($response, 404);
        }

        $validator = Validator::make($input, [
            'nama' => 'required|min:15'
        ]);

        if ($validator->fails()) {
            $response = [
                'success' => false,
                'data' => 'Validation Error.',
                'message' => $validator->errors()
            ];
            return response()->json($response, 500);
        }

        $siswa->nama = $input['nama'];
        $siswa->save();

        $response = [
            'success' => true,
            'data' => $siswa,
            'message' => 'Siswa Berhasil di Update.'
        ];

        return response()->json($response, 200);


















        // $siswa = Siswa::find($id);
        // $input = $request->all();

        // if (!$siswa) {
        //     $response = [
        //         'success' => false,
        //         'data' => 'Gagal Update.',
        //         'message' => 'Siswa Tidak Ditemukan'
        //     ];
        //     return response()->json($response, 404);
        // }

        // $validator = Validator::make($input, [
        //     'nama' => 'required'
        // ]);

        // if ($validator->fails()) {
        //     $response = [
        //         'success' => false,
        //         'data' => 'Validation Error.',
        //         'message' => $validator->errors()
        //     ];
        //     return response()->json($response, 500);
        // }

        // $siswa->nama = $input['nama'];
        // $siswa->save();

        // $response = [
        //     'success' => true,
        //     'data' => $siswa,
        //     'message' => 'Siswa Berhasil Di Edit.'
        // ];

        // return response()->json($response, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $siswa = Siswa::find($id);

        if (!$siswa) {
            $response = [
                'success' => false,
                'data' => 'Gagal Update.',
                'message' => 'Siswa Tidak Ditemukan'
            ];
            return response()->json($response, 404);
        }

        $siswa->delete();
        $response = [
            'success' => true,
            'data' => $siswa,
            'message' => 'Siswa Berhasil Dihapus.'
        ];

        return response()->json($response, 200);

























        // $siswa = Siswa::find($id);

        // if (!$siswa) {
        //     $response = [
        //         'success' => false,
        //         'data' => 'Gagal Menghapus.',
        //         'message' => 'Siswa Tidak Ditemukan'
        //     ];
        //     return response()->json($response, 404);
        // }
        // $siswa->delete();
        // $response = [
        //     'success' => true,
        //     'data' => $siswa,
        //     'message' => 'Siswa berhasil Dihapus.'
        // ];

        // return response()->json($response, 200);
    }
}
