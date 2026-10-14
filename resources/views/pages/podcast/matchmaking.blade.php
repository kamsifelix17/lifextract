<x-podcast-layout>
    <x-slot:title>Find a Partner — TalksWithMrDee</x-slot:title>

    <div class="bg-slate-50 min-h-screen py-12">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <!-- Header & Back Button -->
            <div class="mb-8">
                <a href="{{ route('podcast.index') }}" class="inline-flex items-center gap-2 text-xs font-bold text-slate-500 hover:text-[#181A20] transition mb-6">
                    <i class="bi bi-arrow-left"></i> Back to Podcast
                </a>
                <h1 class="text-3xl sm:text-4xl font-black text-[#181A20] tracking-tight">Intentional Connections</h1>
                <p class="text-sm text-slate-500 mt-2">
                    Complete your profile preferences below. All submissions are handled with strict confidentiality.
                </p>
            </div>

            <!-- Global Success Message -->
            @if(session('success'))
                <div class="mb-8 p-4 rounded-xl bg-emerald-50 border border-emerald-200 text-emerald-800 text-sm font-bold flex items-start gap-3">
                    <i class="bi bi-check-circle-fill text-emerald-600 text-lg"></i>
                    <p>{{ session('success') }}</p>
                </div>
            @endif

            <!-- The Form -->
            <div class="bg-white border border-slate-200 rounded-[32px] p-6 sm:p-10 shadow-sm">
                <form action="{{ route('podcast.matchmaking.store') }}" method="POST" class="space-y-10">
                    @csrf
                    
                    <!-- A. YOUR DETAILS -->
                    <div class="space-y-4">
                        <h3 class="text-sm font-bold text-[#181A20] uppercase tracking-widest border-b border-slate-100 pb-2">1. Your Details</h3>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <input type="text" name="name" placeholder="Full Name" required class="w-full text-sm px-4 py-3 rounded-xl bg-slate-50 border border-slate-200 focus:border-[#F3C63F] focus:outline-none">
                            <input type="email" name="email" placeholder="Email Address" required class="w-full text-sm px-4 py-3 rounded-xl bg-slate-50 border border-slate-200 focus:border-[#F3C63F] focus:outline-none">
                            <input type="number" name="age" placeholder="Your Age" required class="w-full text-sm px-4 py-3 rounded-xl bg-slate-50 border border-slate-200 focus:border-[#F3C63F] focus:outline-none">
                            <input type="text" name="location" placeholder="Your City/Country" required class="w-full text-sm px-4 py-3 rounded-xl bg-slate-50 border border-slate-200 focus:border-[#F3C63F] focus:outline-none">
                        </div>
                    </div>

                    <!-- B. BASIC PREFERENCES -->
                    <div class="space-y-4">
                        <h3 class="text-sm font-bold text-[#181A20] uppercase tracking-widest border-b border-slate-100 pb-2">2. Basic Preferences</h3>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <input type="text" name="pref_age_range" placeholder="Preferred Age Range (e.g. 28-35)" required class="w-full text-sm px-4 py-3 rounded-xl bg-slate-50 border border-slate-200 focus:border-[#F3C63F] focus:outline-none">
                            <select name="pref_gender" required class="w-full text-sm px-4 py-3 rounded-xl bg-slate-50 border border-slate-200 focus:border-[#F3C63F] focus:outline-none text-slate-600">
                                <option value="">Gender Preference</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                            <select name="pref_status" required class="w-full text-sm px-4 py-3 rounded-xl bg-slate-50 border border-slate-200 focus:border-[#F3C63F] focus:outline-none text-slate-600">
                                <option value="">Preferred Relationship Status</option>
                                <option value="Single">Single</option>
                                <option value="Divorced">Divorced</option>
                                <option value="Widowed">Widowed</option>
                                <option value="Any">Any</option>
                            </select>
                            <select name="pref_ldr" required class="w-full text-sm px-4 py-3 rounded-xl bg-slate-50 border border-slate-200 focus:border-[#F3C63F] focus:outline-none text-slate-600">
                                <option value="">Open to Long-Distance?</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                                <option value="Depends">Depends on the person</option>
                            </select>
                        </div>
                    </div>

                    <!-- C. PHYSICAL PREFERENCES -->
                    <div class="space-y-4">
                        <h3 class="text-sm font-bold text-[#181A20] uppercase tracking-widest border-b border-slate-100 pb-2">3. Physical Preferences <span class="text-slate-400 text-[10px] normal-case tracking-normal ml-2">(Optional)</span></h3>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <input type="text" name="pref_height" placeholder="Height Preference" class="w-full text-sm px-4 py-3 rounded-xl bg-slate-50 border border-slate-200 focus:border-[#F3C63F] focus:outline-none">
                            <input type="text" name="pref_build" placeholder="Body Build / Type Preference" class="w-full text-sm px-4 py-3 rounded-xl bg-slate-50 border border-slate-200 focus:border-[#F3C63F] focus:outline-none">
                            <input type="text" name="pref_appearance" placeholder="General Appearance Preferences" class="w-full text-sm px-4 py-3 rounded-xl bg-slate-50 border border-slate-200 focus:border-[#F3C63F] focus:outline-none sm:col-span-2">
                        </div>
                    </div>

                    <!-- D. EDUCATION & CAREER -->
                    <div class="space-y-4">
                        <h3 class="text-sm font-bold text-[#181A20] uppercase tracking-widest border-b border-slate-100 pb-2">4. Education & Career</h3>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <select name="pref_education" class="w-full text-sm px-4 py-3 rounded-xl bg-slate-50 border border-slate-200 focus:border-[#F3C63F] focus:outline-none text-slate-600">
                                <option value="">Minimum Education Level</option>
                                <option value="High School">High School</option>
                                <option value="Undergraduate">Undergraduate Degree</option>
                                <option value="Postgraduate">Postgraduate Degree</option>
                                <option value="Does not matter">Does not matter</option>
                            </select>
                            <select name="pref_career_type" class="w-full text-sm px-4 py-3 rounded-xl bg-slate-50 border border-slate-200 focus:border-[#F3C63F] focus:outline-none text-slate-600">
                                <option value="">Preferred Career Path</option>
                                <option value="Professional">Professional / Corporate</option>
                                <option value="Entrepreneur">Entrepreneur / Business</option>
                                <option value="Student">Student</option>
                                <option value="Other">Other / Flexible</option>
                            </select>
                            <input type="text" name="pref_occupation" placeholder="Specific Profession/Occupation Interests (Optional)" class="w-full text-sm px-4 py-3 rounded-xl bg-slate-50 border border-slate-200 focus:border-[#F3C63F] focus:outline-none sm:col-span-2">
                        </div>
                    </div>

                    <!-- E. BACKGROUND & BELIEFS -->
                    <div class="space-y-4">
                        <h3 class="text-sm font-bold text-[#181A20] uppercase tracking-widest border-b border-slate-100 pb-2">5. Culture & Faith <span class="text-slate-400 text-[10px] normal-case tracking-normal ml-2">(Optional)</span></h3>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <input type="text" name="pref_language" placeholder="Preferred Language(s)" class="w-full text-sm px-4 py-3 rounded-xl bg-slate-50 border border-slate-200 focus:border-[#F3C63F] focus:outline-none">
                            <input type="text" name="pref_tribe" placeholder="Tribe / Ethnic Background" class="w-full text-sm px-4 py-3 rounded-xl bg-slate-50 border border-slate-200 focus:border-[#F3C63F] focus:outline-none">
                            <input type="text" name="pref_religion" placeholder="Religion / Faith Preference" class="w-full text-sm px-4 py-3 rounded-xl bg-slate-50 border border-slate-200 focus:border-[#F3C63F] focus:outline-none">
                            <select name="pref_faith_importance" class="w-full text-sm px-4 py-3 rounded-xl bg-slate-50 border border-slate-200 focus:border-[#F3C63F] focus:outline-none text-slate-600">
                                <option value="">Is Faith Important to You?</option>
                                <option value="Very Important">Very Important</option>
                                <option value="Somewhat Important">Somewhat Important</option>
                                <option value="Not Important">Not Important</option>
                            </select>
                        </div>
                    </div>

                    <!-- F. LIFESTYLE PREFERENCES -->
                    <div class="space-y-4">
                        <h3 class="text-sm font-bold text-[#181A20] uppercase tracking-widest border-b border-slate-100 pb-2">6. Lifestyle Preferences</h3>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <select name="pref_personality" class="w-full text-sm px-4 py-3 rounded-xl bg-slate-50 border border-slate-200 focus:border-[#F3C63F] focus:outline-none text-slate-600">
                                <option value="">Preferred Personality Style</option>
                                <option value="Introvert">Introvert</option>
                                <option value="Extrovert">Extrovert</option>
                                <option value="Ambivert">Ambivert / Balanced</option>
                            </select>
                            <select name="pref_smoking" class="w-full text-sm px-4 py-3 rounded-xl bg-slate-50 border border-slate-200 focus:border-[#F3C63F] focus:outline-none text-slate-600">
                                <option value="">Smoking Preference</option>
                                <option value="Non-smoker only">Non-smoker only</option>
                                <option value="Occasional is fine">Occasional is fine</option>
                                <option value="Doesn't matter">Doesn't matter</option>
                            </select>
                            <select name="pref_alcohol" class="w-full text-sm px-4 py-3 rounded-xl bg-slate-50 border border-slate-200 focus:border-[#F3C63F] focus:outline-none text-slate-600">
                                <option value="">Alcohol Preference</option>
                                <option value="Non-drinker only">Non-drinker only</option>
                                <option value="Social drinker is fine">Social drinker is fine</option>
                                <option value="Doesn't matter">Doesn't matter</option>
                            </select>
                            <select name="pref_children" class="w-full text-sm px-4 py-3 rounded-xl bg-slate-50 border border-slate-200 focus:border-[#F3C63F] focus:outline-none text-slate-600">
                                <option value="">Family Orientation / Children</option>
                                <option value="Has children, wants more">Has children, wants more</option>
                                <option value="No children, wants children">No children, wants children</option>
                                <option value="Has children, does not want more">Has children, does not want more</option>
                                <option value="No children, does not want children">No children, does not want children</option>
                                <option value="Open / Undecided">Open / Undecided</option>
                            </select>
                        </div>
                    </div>

                    <!-- G. RELATIONSHIP PREFERENCES -->
                    <div class="space-y-4">
                        <h3 class="text-sm font-bold text-[#181A20] uppercase tracking-widest border-b border-slate-100 pb-2">7. Relationship Goals</h3>
                        <select name="pref_goal" required class="w-full text-sm px-4 py-3 rounded-xl bg-slate-50 border border-slate-200 focus:border-[#F3C63F] focus:outline-none text-slate-600">
                            <option value="">What are you looking for?</option>
                            <option value="Marriage / Long-term commitment">Marriage / Long-term commitment</option>
                            <option value="Serious relationship">Serious relationship</option>
                            <option value="Dating with purpose">Dating with purpose</option>
                            <option value="Friendship first">Friendship first</option>
                        </select>
                    </div>

                    <!-- H. VALUES & PERSONALITY (Checkboxes) -->
                    <div class="space-y-4">
                        <h3 class="text-sm font-bold text-[#181A20] uppercase tracking-widest border-b border-slate-100 pb-2">8. Values & Personality</h3>
                        <p class="text-xs text-slate-500 mb-2">Select the qualities that matter most to you:</p>
                        <div class="grid grid-cols-2 sm:grid-cols-3 gap-y-3 gap-x-4">
                            @php
                                $values = ['Honesty', 'Respect', 'Loyalty', 'Communication', 'Emotional maturity', 'Ambition', 'Kindness', 'Family values', 'Financial responsibility', 'Sense of humour', 'Intelligence', 'Faith'];
                            @endphp
                            @foreach($values as $val)
                            <label class="flex items-center gap-2 text-xs text-slate-600 cursor-pointer hover:text-[#181A20] transition">
                                <input type="checkbox" name="values[]" value="{{ $val }}" class="rounded border-slate-300 bg-white text-[#F3C63F] focus:ring-[#F3C63F]">
                                {{ $val }}
                            </label>
                            @endforeach
                            <label class="flex items-center gap-2 text-xs text-slate-600 cursor-pointer hover:text-[#181A20] transition">
                                <input type="checkbox" name="values[]" value="Other" class="rounded border-slate-300 bg-white text-[#F3C63F] focus:ring-[#F3C63F]">
                                Other
                            </label>
                        </div>
                    </div>

                    <!-- I. DEAL-BREAKERS & IDEAL PARTNER -->
                    <div class="space-y-4">
                        <h3 class="text-sm font-bold text-[#181A20] uppercase tracking-widest border-b border-slate-100 pb-2">9. The Ideal Partner & Deal Breakers</h3>
                        <div class="space-y-4">
                            <div>
                                <label class="text-xs font-bold text-[#181A20] uppercase tracking-wider mb-2 block">Tell Us About Your Ideal Partner</label>
                                <textarea name="ideal_partner" rows="5" placeholder="Describe the kind of partner you would ideally like to meet. Tell us what matters most to you, including personality, character, lifestyle, values and other qualities you consider important." required class="w-full text-sm p-4 rounded-xl bg-slate-50 border border-slate-200 focus:border-[#F3C63F] focus:outline-none"></textarea>
                            </div>
                            <div>
                                <label class="text-xs font-bold text-[#181A20] uppercase tracking-wider mb-2 block">Deal-Breakers <span class="text-slate-400 normal-case tracking-normal">(Optional)</span></label>
                                <textarea name="deal_breakers" rows="2" placeholder="List any traits, habits, or circumstances you absolutely cannot accept..." class="w-full text-sm p-4 rounded-xl bg-slate-50 border border-slate-200 focus:border-[#F3C63F] focus:outline-none"></textarea>
                            </div>
                        </div>
                    </div>

                    <!-- J. PRIVACY & CONSENT -->
                    <div class="space-y-4 bg-[#181A20] text-white p-6 rounded-2xl">
                        <h3 class="text-sm font-bold uppercase tracking-widest mb-2 text-[#F3C63F]">Privacy & Consent Notice</h3>
                        <p class="text-xs text-slate-300 leading-relaxed mb-4">
                            Because this information is personal, it is securely collected strictly for matching purposes by the TalksWithMrDee administration. We explain how your data is used and will never publicly display your private preferences without explicit permission.
                        </p>
                        <div class="space-y-3">
                            <label class="flex items-start gap-3 cursor-pointer group">
                                <input type="checkbox" name="consent_store" required class="mt-1 rounded border-white/20 bg-white/10 text-[#F3C63F] focus:ring-[#F3C63F]">
                                <span class="text-xs text-slate-300 group-hover:text-white transition">I consent to TalksWithMrDee collecting and securely storing this information for the purpose of potential matchmaking.</span>
                            </label>
                            <label class="flex items-start gap-3 cursor-pointer group">
                                <input type="checkbox" name="consent_private" required class="mt-1 rounded border-white/20 bg-white/10 text-[#F3C63F] focus:ring-[#F3C63F]">
                                <span class="text-xs text-slate-300 group-hover:text-white transition">I request that my preferences remain private and understand they will not be displayed publicly without my explicit consent.</span>
                            </label>
                        </div>
                    </div>

                    <button type="submit" class="w-full py-4 rounded-xl font-bold text-[#181A20] bg-[#F3C63F] hover:bg-[#eab92d] transition flex justify-center items-center gap-2 shadow-lg">
                        <span>Submit Preferences Privately</span> <i class="bi bi-send-fill"></i>
                    </button>
                </form>
            </div>

        </div>
    </div>
</x-podcast-layout>