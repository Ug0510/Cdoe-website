<?php

namespace App\Http\Controllers;

use App\Models\Blogs;
use Carbon\Carbon;
use function view;

class CDOEController extends Controller
{
    private function getMockBlogs()
    {
        $blogs = [];

        $mockData = [
            [
                'id' => 1,
                'n_slug' => 'online-vs-offline-degree',
                'monaco_image_path' => null,
                'post_path' => null,
                'alt_tag_main_image' => 'Online vs Offline Degree',
                'category' => 'General',
                'posted_at' => '2026-08-04 12:00:00',
                'post_title' => 'Online vs Offline Degree: Which is Better?',
                'post_description' => 'Online vs Offline Degree: Which one offers better career opportunities, higher flexibility, and lower costs? Explore the comparisons.',
                'full_post' => '<p>In today\'s rapidly evolving academic landscape, choosing between an online degree and an offline (traditional) degree is one of the most critical decisions students face. While traditional face-to-face learning offers campus experience and direct peer interaction, online degrees provide unprecedented flexibility, affordability, and accessibility.</p><p>Key differences include flexible scheduling for working professionals, lower overall tuition fees, lack of commute requirements, and the ability to learn from anywhere in the world. Evaluate your career goals and choose what fits best!</p>',
            ],
            [
                'id' => 2,
                'n_slug' => 'online-mba-data-analytics',
                'monaco_image_path' => null,
                'post_path' => null,
                'alt_tag_main_image' => 'Online MBA in Data Analytics',
                'category' => 'General',
                'posted_at' => '2026-07-29 12:00:00',
                'post_title' => 'Online MBA in Data Analytics: Scope & Career Opportunities',
                'post_description' => 'An Online MBA in Data Analytics is a postgraduate management degree that equips you with analytical skills for data-driven decisions.',
                'full_post' => '<p>Data has become the new oil in the modern digital economy. Organizations across all sectors—from finance to e-commerce—rely heavily on data analysts and business managers to interpret complex trends and guide corporate strategy.</p><p>An Online MBA in Data Analytics bridges the gap between pure technical data science and high-level business management. Career scope includes roles like Business Intelligence Analyst, Data Manager, Strategy Consultant, and Director of Analytics.</p>',
            ],
            [
                'id' => 3,
                'n_slug' => 'online-mba-logistics-supply-chain',
                'monaco_image_path' => null,
                'post_path' => null,
                'alt_tag_main_image' => 'Online MBA in Logistics',
                'category' => 'General',
                'posted_at' => '2026-07-24 12:00:00',
                'post_title' => 'Online MBA in Logistics & Supply Chain Management',
                'post_description' => 'Online MBA in Logistics & Supply Chain Management is an online post-graduate programme designed to master global supply chain operations.',
                'full_post' => '<p>Logistics and Supply Chain Management is the backbone of global commerce. Managing the flow of goods from raw material suppliers to final consumers requires meticulous planning, synchronization, and optimization.</p><p>This online programme covers operations management, warehouse management, transportation planning, international trade logistics, and supply chain analytics. It is perfect for professionals seeking to advance to executive leadership in logistics.</p>',
            ],
            [
                'id' => 4,
                'n_slug' => 'law-courses-after-12th',
                'monaco_image_path' => null,
                'post_path' => null,
                'alt_tag_main_image' => 'Law Courses After 12th',
                'category' => 'General',
                'posted_at' => '2026-07-20 12:00:00',
                'post_title' => 'Law Courses After 12th: A Comprehensive Guide',
                'post_description' => 'Explore various law courses after 12th, including BA LLB, BBA LLB, eligibility, admission criteria, and career prospects in India.',
                'full_post' => '<p>Pursuing law is one of the most prestigious and intellectually stimulating career paths. In India, students can enter law immediately after completing their 12th standard by enrolling in 5-year integrated law programmes.</p><p>Options include BA LLB (integrating arts with law) and BBA LLB (integrating business management with law). Graduates can pursue careers as corporate lawyers, litigators, legal advisors, judicial officers, or work with legal compliance firms.</p>',
            ],
            [
                'id' => 5,
                'n_slug' => 'top-10-ai-colleges-india',
                'monaco_image_path' => null,
                'post_path' => null,
                'alt_tag_main_image' => 'Top 10 AI Colleges',
                'category' => 'General',
                'posted_at' => '2026-07-15 12:00:00',
                'post_title' => 'Top 10 Artificial Intelligence (AI) Colleges in India 2026',
                'post_description' => 'Explore the top Artificial Intelligence (AI) colleges in India for 2026. Compare courses, fees, infrastructure, and placements.',
                'full_post' => '<p>Artificial Intelligence and Machine Learning are transforming industries globally. The demand for engineers skilled in neural networks, natural language processing, and computer vision has surged exponentially.</p><p>This guide highlights the top AI institutions in India for 2026. These colleges offer specialized B.Tech and M.Tech programmes in AI, robust lab infrastructures, top-tier research faculty, and outstanding placement partnerships with global tech giants.</p>',
            ],
            [
                'id' => 6,
                'n_slug' => 'mba-hospital-management-career',
                'monaco_image_path' => null,
                'post_path' => null,
                'alt_tag_main_image' => 'MBA Hospital Management',
                'category' => 'General',
                'posted_at' => '2026-07-10 12:00:00',
                'post_title' => 'Why Choose an MBA in Hospital Management?',
                'post_description' => 'Explore course details, eligibility, fees, admission process, and career prospects for MBA in Hospital Management.',
                'full_post' => '<p>Healthcare administration is a rapidly growing field. An MBA in Hospital Management equips graduates with leadership skills tailored for medical settings, clinics, and pharmaceutical companies.</p>',
            ],
            [
                'id' => 7,
                'n_slug' => 'nvidia-aws-academy-tmu',
                'monaco_image_path' => null,
                'post_path' => null,
                'alt_tag_main_image' => 'NVIDIA AWS Partnership',
                'category' => 'General',
                'posted_at' => '2026-07-05 12:00:00',
                'post_title' => 'NVIDIA and AWS Academy Partnership at TMU',
                'post_description' => 'TMU has partnered with NVIDIA and AWS Academy to offer cutting-edge cloud computing and AI training to students.',
                'full_post' => '<p>This collaboration ensures students gain access to industry-recognized training in artificial intelligence, cloud architecture, and data engineering directly within the curriculum.</p>',
            ],
            [
                'id' => 8,
                'n_slug' => 'time-management-college-freshmen',
                'monaco_image_path' => null,
                'post_path' => null,
                'alt_tag_main_image' => 'Time Management Tips',
                'category' => 'General',
                'posted_at' => '2026-06-30 12:00:00',
                'post_title' => 'Time Management Tips for College Freshmen',
                'post_description' => 'Learn how to balance lectures, study time, extra-curriculars, and personal life effectively as a new college student.',
                'full_post' => '<p>Starting college brings new independence and new responsibilities. Effective time management, prioritization, and scheduling are key to avoiding burnout and achieving success.</p>',
            ],
            [
                'id' => 9,
                'n_slug' => 'online-courses-every-student-should-take',
                'monaco_image_path' => null,
                'post_path' => null,
                'alt_tag_main_image' => 'Online Courses Recommendation',
                'category' => 'General',
                'posted_at' => '2026-06-25 12:00:00',
                'post_title' => 'Top 5 Online Courses Every Student Should Take',
                'post_description' => 'Boost your CV and skills with these essential online certifications in coding, communication, design, and digital marketing.',
                'full_post' => '<p>Complementing your degree with online certifications is a great way to stand out to recruiters. We review top courses in project management, data analysis, and professional writing.</p>',
            ],
            [
                'id' => 10,
                'n_slug' => 'balancing-engineering-and-college-life',
                'monaco_image_path' => null,
                'post_path' => null,
                'alt_tag_main_image' => 'Balancing Engineering Life',
                'category' => 'General',
                'posted_at' => '2026-06-20 12:00:00',
                'post_title' => 'Balancing Engineering Studies and College Life',
                'post_description' => 'A guide for engineering students on how to maintain good grades while enjoying campus events and making memories.',
                'full_post' => '<p>Engineering studies are notoriously demanding. However, maintaining a healthy work-life balance is crucial for mental well-being and long-term success. Here is how to make the most of both worlds.</p>',
            ],
            [
                'id' => 11,
                'n_slug' => 'tips-to-improve-public-speaking',
                'monaco_image_path' => null,
                'post_path' => null,
                'alt_tag_main_image' => 'Public Speaking Tips',
                'category' => 'General',
                'posted_at' => '2026-06-15 12:00:00',
                'post_title' => '10 Tips to Improve Your Public Speaking Skills',
                'post_description' => 'Conquer stage fright and deliver powerful, engaging presentations with these simple and practical public speaking tips.',
                'full_post' => '<p>Good communication is a critical leadership skill. From preparing your speech to mastering body language and voice modulation, here is a guide to becoming a confident public speaker.</p>',
            ],
            [
                'id' => 12,
                'n_slug' => 'ugc-precautionary-notice-online-degrees',
                'monaco_image_path' => null,
                'post_path' => null,
                'alt_tag_main_image' => 'UGC Precautionary Notice',
                'category' => 'General',
                'posted_at' => '2026-06-10 12:00:00',
                'post_title' => 'UGC Online Degree Precautionary Notice: What to Know',
                'post_description' => 'Important details regarding the UGC precautionary notice for students enrolling in online and distance learning courses.',
                'full_post' => '<p>Before enrolling in any online program, ensure it is fully recognized and approved by the University Grants Commission (UGC). This guide highlights the checks you should make to ensure validity.</p>',
            ],
        ];

        foreach ($mockData as $data) {
            $blog = new \stdClass();
            foreach ($data as $key => $val) {
                $blog->{$key} = $val;
            }
            $blogs[] = $blog;
        }

        return collect($blogs);
    }

    public function home()
    {
        $activeBlogs = collect();
        try {
            $activeBlogs = Blogs::where('status', 1)
                ->orderBy('posted_at', 'DESC')
                ->orderBy('id', 'DESC')
                ->limit(5)
                ->get();

            if ($activeBlogs->isEmpty()) {
                $activeBlogs = $this->getMockBlogs()->take(5);
            }
        } catch (\Exception $e) {
            \Log::error("Failed to fetch active blogs for homepage, using mock data: " . $e->getMessage());
            $activeBlogs = $this->getMockBlogs()->take(5);
        }

        return view('all_pages.home', compact('activeBlogs'));
    }

    public function programme()
    {
        return view('all_pages.programme');
    }


    public function blog()
    {
        $activeBlogs = collect();
        try {
            $activeBlogs = Blogs::where('status', 1)
                ->orderBy('posted_at', 'DESC')
                ->orderBy('id', 'DESC')
                ->get();

            if ($activeBlogs->isEmpty()) {
                $activeBlogs = $this->getMockBlogs();
            }
        } catch (\Exception $e) {
            \Log::error("Failed to fetch active blogs for blog page, using mock data: " . $e->getMessage());
            $activeBlogs = $this->getMockBlogs();
        }

        return view('all_pages.blog', compact('activeBlogs'));
    }

    public function showBlog($slug)
    {
        try {
            $blog = Blogs::where('n_slug', $slug)->where('status', 1)->firstOrFail();
            $blog->posted_at = Carbon::parse($blog->posted_at)->format('d F, Y');

            // Fetch recent blogs for sidebar (limit 3)
            $recentBlogs = Blogs::where('status', 1)
                ->where('id', '!=', $blog->id)
                ->orderBy('posted_at', 'desc')
                ->limit(3)
                ->get()
                ->map(function ($item) {
                    $item->posted_at = Carbon::parse($item->posted_at)->format('d F');
                    return $item;
                });
        } catch (\Exception $e) {
            \Log::error("Failed to fetch blog details for slug {$slug}, using mock data: " . $e->getMessage());
            $mockBlogs = $this->getMockBlogs();
            $blog = $mockBlogs->firstWhere('n_slug', $slug);
            if (!$blog) {
                abort(404);
            }
            $blog->posted_at = Carbon::parse($blog->posted_at)->format('d F, Y');

            $recentBlogs = $mockBlogs->filter(function ($item) use ($slug) {
                return $item->n_slug !== $slug;
            })->take(3)->map(function ($item) {
                $item->posted_at = Carbon::parse($item->posted_at)->format('d F');
                return $item;
            });
        }

        return view('all_pages.blog_details', compact('blog', 'recentBlogs'));
    }


    public function blog_details()
    {
        return view('all_pages.blog_details');
    }

    public function hr_programme()
    {
        return view('all_pages.programme.hr_programme');
    }

    public function agri_business_programme()
    {
        return view('all_pages.programme.agri_business');
    }

    public function ib_programme()
    {
        return view('all_pages.programme.ib_programme');
    }

    public function finance_programme()
    {
        return view('all_pages.programme.finance_programme');
    }

    public function marketing_programme()
    {
        return view('all_pages.programme.marketing_programme');
    }

    public function bba_programme()
    {
        return view('all_pages.programme.bba_programme');
    }

    public function bca_programme()
    {
        return view('all_pages.programme.bca_programme');
    }

    public function digital_marketing_programme()
    {
        return view('all_pages.programme.digital_marketing_progrmme');
    }

    public function lscm_programme()
    {
        return view('all_pages.programme.mba_lscm');
    }

    public function data_analytics_programme()
    {
        return view('all_pages.programme.mba_data_analytics');
    }

    public function hospital_healthcare_programme()
    {
        return view('all_pages.programme.mba_hospital_healthcare');
    }

    public function operations_strategy_programme()
    {
        return view('all_pages.programme.mba_operations_strategy');
    }

    public function banking_fintech_ai_programme()
    {
        return view('all_pages.programme.mba_banking_fintech_ai');
    }

    public function mandatory_disclosure()
    {
        return view('all_pages.mandatory_disclosure');
    }

    public function admissions_rules()
    {
        return view('all_pages.admissions.admissions_rules');
    }

    public function how_to_apply()
    {
        return view('all_pages.admissions.how_to_apply');
    }

    public function facilities()
    {
        return view('all_pages.facilities');
    }

    public static function getProgrammes()
    {
        $defaultProgrammes = [
            'MBA in Finance',
            'MBA in HR Management',
            'MBA in Marketing',
            'MBA in Digital Marketing',
            'MBA in International Business',
            'MBA in Logistics & Supply Chain',
            'MBA in Data Analytics',
            'MBA in Agri Business',
            'MBA Hospital & Healthcare Management',
            'MBA Operations Strategy & Project Management',
            'MBA in Banking, Fintech & AI',
            'Online BBA',
            'Online BCA',
        ];

        try {
            if (\Illuminate\Support\Facades\Schema::hasTable('programmes')) {
                $dbProgrammes = \Illuminate\Support\Facades\DB::table('programmes')
                    ->pluck('title')
                    ->filter()
                    ->toArray();

                if (!empty($dbProgrammes)) {
                    $defaultProgrammes = array_unique(array_merge($defaultProgrammes, $dbProgrammes));
                }
            }
        } catch (\Exception $e) {
            // Fallback gracefully to default list if DB query fails
        }

        return array_values($defaultProgrammes);
    }

    public function contact()
    {
        $programmes = self::getProgrammes();
        return view('all_pages.contact', compact('programmes'));
    }

    public function storeContact(\Illuminate\Http\Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'mobile' => 'required|string|max:20',
            'programme' => 'nullable|string|max:255',
            'message' => 'required|string|max:2000',
        ]);

        try {
            if (!\Illuminate\Support\Facades\Schema::hasTable('contact_enquiries')) {
                \Illuminate\Support\Facades\Schema::create('contact_enquiries', function (\Illuminate\Database\Schema\Blueprint $table) {
                    $table->id();
                    $table->string('name');
                    $table->string('email');
                    $table->string('mobile', 20);
                    $table->string('programme')->nullable();
                    $table->text('message');
                    $table->string('ip_address', 45)->nullable();
                    $table->timestamps();
                });
            }

            \App\Models\ContactEnquiry::create([
                'name' => $validated['name'],
                'email' => $validated['email'],
                'mobile' => $validated['mobile'],
                'programme' => $validated['programme'] ?? null,
                'message' => $validated['message'],
                'ip_address' => $request->ip(),
            ]);

            $successMsg = 'Thank you for reaching out! Your enquiry has been submitted successfully. Our admissions team will contact you shortly.';

            if ($request->ajax() || $request->wantsJson()) {
                return response()->json([
                    'success' => true,
                    'message' => $successMsg,
                ]);
            }

            return redirect()->back()->with('success', $successMsg);
        } catch (\Exception $e) {
            $errorMsg = 'Something went wrong while submitting your enquiry. Please try again or call our helpline directly.';

            if ($request->ajax() || $request->wantsJson()) {
                return response()->json([
                    'success' => false,
                    'message' => $errorMsg,
                ], 500);
            }

            return redirect()->back()->with('error', $errorMsg);
        }
    }
}
