<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use App\Models\HowWeWork;
use App\Models\LandingPage;
use App\Models\Project;
use App\Models\Service;
use App\Models\WhyChooseUs;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    /**
     * Mengambil semua data untuk Landing Page.
     */
    public function getLandingPage()
    {
        $data = LandingPage::first();
        return response()->json($data);
    }

    /**
     * Mengambil semua data untuk About Us.
     */
    public function getAboutUs()
    {
        $data = AboutUs::first();
        return response()->json($data);
    }

    /**
     * Mengambil semua data untuk Why Choose Us.
     */
    public function getWhyChooseUs()
    {
        $data = WhyChooseUs::first();
        return response()->json($data);
    }

    /**
     * Mengambil semua data untuk How We Work.
     */
    public function getHowWeWork()
    {
        $data = HowWeWork::first();
        return response()->json($data);
    }

    /**
     * Mengambil semua data untuk Services.
     */
    public function getServices()
    {
        $data = Service::all();
        return response()->json($data);
    }

    /**
     * Mengambil semua data untuk Projects.
     */
    public function getProjects()
    {
        $data = Project::all();
        return response()->json($data);
    }

    /**
     * Mengambil detail Project berdasarkan ID.
     */
    public function getProjectDetail($id)
    {
        $data = Project::find($id);
        if (!$data) {
            return response()->json(['message' => 'Project not found'], 404);
        }
        return response()->json($data);
    }
    
    /**
     * Mengambil 3 proyek untuk ditampilkan di footer.
     */
 public function getFeaturedProjects()
    {
        $data = Project::where('is_featured', true)
                       ->select('id', 'foto_head', 'judul') 
                       ->take(3)
                       ->get();

        return response()->json($data);
    }

    /**
     * Mengambil data untuk halaman galeri proyek.
     */
    public function getProjectGallery()
    {
        $data = Project::all()->map(function ($project) {
            return [
                'id' => $project->id,
                'foto_head' => $project->foto_head,
                'judul' => $project->judul,
                'desc_lengkap' => $project->desc_lengkap,
            ];
        });

        return response()->json($data);
    }
}