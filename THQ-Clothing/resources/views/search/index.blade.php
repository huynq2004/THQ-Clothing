@extends('layouts.app')

@section('title', 'Tìm kiếm - THQ Clothing')

@section('content')
<div class="px-4 md:px-8 py-8 min-h-screen">
    <!-- Search Container -->
    <div class="max-w-4xl mx-auto">
        <!-- Search Input -->
        <div class="mb-8">
            <div class="relative">
                <input type="text" 
                       id="search-input"
                       placeholder="BẠN ĐANG TÌM KIẾM GÌ?" 
                       class="w-full border-b-2 border-black bg-transparent pb-3 text-center text-lg uppercase tracking-wider focus:outline-none"
                       value="">
                <button id="clear-search" class="absolute right-0 top-0 text-xl font-light hidden">X</button>
            </div>
        </div>

        <!-- Search Results Header -->
        <div id="search-results-header" class="hidden mb-6">
            <div class="flex items-center justify-between">
                <h2 id="search-results-text" class="text-lg uppercase tracking-wider"></h2>
                <div class="relative">
                    <button id="filter-toggle" class="flex items-center space-x-2 text-lg uppercase tracking-wider">
                        <span>BỘ LỌC</span>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M3 3a1 1 0 011-1h12a1 1 0 011 1v3a1 1 0 01-.293.707L12 11.414V15a1 1 0 01-.293.707l-2 2A1 1 0 018 17v-5.586L3.293 6.707A1 1 0 013 6V3z"/>
                        </svg>
                    </button>
                    
                    <!-- Filter Dropdown -->
                    <div id="filter-dropdown" class="absolute right-0 top-full mt-2 w-80 bg-white border border-gray-300 shadow-lg z-50 hidden">
                        <div class="bg-black text-white px-4 py-3 text-sm uppercase tracking-wider">
                            BỘ LỌC TÌM KIẾM
                        </div>
                        <div class="p-4 space-y-4">
                            <!-- Category Filter -->
                            <div>
                                <h4 class="text-sm uppercase tracking-wider mb-3">THEO DANH MỤC</h4>
                                <div class="flex space-x-2">
                                    <button class="border border-gray-300 px-4 py-2 text-sm uppercase tracking-wider hover:bg-gray-100">QUẦN</button>
                                    <button class="border border-gray-300 px-4 py-2 text-sm uppercase tracking-wider hover:bg-gray-100">ÁO</button>
                                    <button class="border border-gray-300 px-4 py-2 text-sm uppercase tracking-wider hover:bg-gray-100">PHỤ KIỆN</button>
                                </div>
                            </div>
                            
                            <!-- Date Filter -->
                            <div>
                                <h4 class="text-sm uppercase tracking-wider mb-3">THEO NGÀY CẬP NHẬT</h4>
                                <label class="flex items-center">
                                    <input type="checkbox" class="mr-2" checked>
                                    <span class="text-sm uppercase tracking-wider">MỚI NHẤT</span>
                                </label>
                            </div>
                            
                            <!-- Action Buttons -->
                            <div class="flex space-x-2 pt-4">
                                <button id="reset-filter" class="border border-gray-300 px-4 py-2 text-sm uppercase tracking-wider hover:bg-gray-100">THIẾT LẬP LẠI</button>
                                <button id="apply-filter" class="bg-black text-white px-4 py-2 text-sm uppercase tracking-wider hover:bg-gray-800">ÁP DỤNG</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Suggestions Section -->
        <div id="suggestions-section">
            <h3 class="text-lg uppercase tracking-wider mb-6">CÓ THỂ BẠN QUAN TÂM</h3>
            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-4">
                <!-- Suggestion Products -->
                <div class="group cursor-pointer">
                    <div class="bg-gray-100 aspect-[3/4] mb-3 overflow-hidden">
                        <img src="{{ asset('assets/images/search/1.jpg') }}" alt="ÁO POLO TAY DÀI 2025" 
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                    </div>
                    <div>
                        <h4 class="text-xs uppercase tracking-wider mb-1">ÁO POLO TAY DÀI 2025</h4>
                        <p class="text-xs text-gray-600">299.000 VND</p>
                    </div>
                </div>
                
                <div class="group cursor-pointer">
                    <div class="bg-gray-100 aspect-[3/4] mb-3 overflow-hidden">
                        <img src="{{ asset('assets/images/search/2.jpg') }}" alt="ÁO POLO TAY NGẮN C..." 
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                    </div>
                    <div>
                        <h4 class="text-xs uppercase tracking-wider mb-1">ÁO POLO TAY NGẮN C...</h4>
                        <p class="text-xs text-gray-600">249.000 VND</p>
                    </div>
                </div>
                
                <div class="group cursor-pointer">
                    <div class="bg-gray-100 aspect-[3/4] mb-3 overflow-hidden">
                        <img src="{{ asset('assets/images/search/3.jpg') }}" alt="ÁO PHÔNG COTTON 2..." 
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                    </div>
                    <div>
                        <h4 class="text-xs uppercase tracking-wider mb-1">ÁO PHÔNG COTTON 2...</h4>
                        <p class="text-xs text-gray-600">309.000 VND</p>
                    </div>
                </div>
                
                <div class="group cursor-pointer">
                    <div class="bg-gray-100 aspect-[3/4] mb-3 overflow-hidden">
                        <img src="{{ asset('assets/images/search/4.jpg') }}" alt="TÚI ĐỰNG ĐỒ CÁ NHÂ..." 
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                    </div>
                    <div>
                        <h4 class="text-xs uppercase tracking-wider mb-1">TÚI ĐỰNG ĐỒ CÁ NHÂ...</h4>
                        <p class="text-xs text-gray-600">450.000 VND</p>
                    </div>
                </div>
                
                <div class="group cursor-pointer">
                    <div class="bg-gray-100 aspect-[3/4] mb-3 overflow-hidden">
                        <img src="{{ asset('assets/images/search/5.jpg') }}" alt="QUẦN BÒ HOT TREND..." 
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                    </div>
                    <div>
                        <h4 class="text-xs uppercase tracking-wider mb-1">QUẦN BÒ HOT TREND...</h4>
                        <p class="text-xs text-gray-600">499.000 VND</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Search Results Section -->
        <div id="search-results-section" class="hidden">
            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-4">
                <!-- Search Result Products -->
                <div class="group cursor-pointer">
                    <div class="bg-gray-100 aspect-[3/4] mb-3 overflow-hidden">
                        <img src="{{ asset('assets/images/search/6.jpg') }}" alt="ÁO PHÔNG KẺ SỌC HOT" 
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                    </div>
                    <div>
                        <h4 class="text-xs uppercase tracking-wider mb-1">ÁO PHÔNG KẺ SỌC HOT</h4>
                        <p class="text-xs text-gray-600">199.000 VND</p>
                    </div>
                </div>
                
                <div class="group cursor-pointer">
                    <div class="bg-gray-100 aspect-[3/4] mb-3 overflow-hidden">
                        <img src="{{ asset('assets/images/search/7.jpg') }}" alt="ÁO PHÔNG TRẮNG HOA..." 
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                    </div>
                    <div>
                        <h4 class="text-xs uppercase tracking-wider mb-1">ÁO PHÔNG TRẮNG HOA...</h4>
                        <p class="text-xs text-gray-600">299.000 VND</p>
                    </div>
                </div>
                
                <div class="group cursor-pointer">
                    <div class="bg-gray-100 aspect-[3/4] mb-3 overflow-hidden">
                        <img src="{{ asset('assets/images/search/8.jpg') }}" alt="ÁO PHÔNG BÓNG ĐÁ..." 
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                    </div>
                    <div>
                        <h4 class="text-xs uppercase tracking-wider mb-1">ÁO PHÔNG BÓNG ĐÁ...</h4>
                        <p class="text-xs text-gray-600">269.000 VND</p>
                    </div>
                </div>
                
                <div class="group cursor-pointer">
                    <div class="bg-gray-100 aspect-[3/4] mb-3 overflow-hidden">
                        <img src="{{ asset('assets/images/search/9.jpg') }}" alt="ÁO PHÔNG THIẾU CHỮ..." 
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                    </div>
                    <div>
                        <h4 class="text-xs uppercase tracking-wider mb-1">ÁO PHÔNG THIẾU CHỮ...</h4>
                        <p class="text-xs text-gray-600">399.000 VND</p>
                    </div>
                </div>
                
                <div class="group cursor-pointer">
                    <div class="bg-gray-100 aspect-[3/4] mb-3 overflow-hidden">
                        <img src="{{ asset('assets/images/search/10.jpg') }}" alt="ÁO PHÔNG XANH HOT..." 
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                    </div>
                    <div>
                        <h4 class="text-xs uppercase tracking-wider mb-1">ÁO PHÔNG XANH HOT...</h4>
                        <p class="text-xs text-gray-600">239.000 VND</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.getElementById('search-input');
    const clearSearch = document.getElementById('clear-search');
    const suggestionsSection = document.getElementById('suggestions-section');
    const searchResultsSection = document.getElementById('search-results-section');
    const searchResultsHeader = document.getElementById('search-results-header');
    const searchResultsText = document.getElementById('search-results-text');
    const filterToggle = document.getElementById('filter-toggle');
    const filterDropdown = document.getElementById('filter-dropdown');
    const resetFilter = document.getElementById('reset-filter');
    const applyFilter = document.getElementById('apply-filter');

    // Search input events
    searchInput.addEventListener('input', function() {
        const value = this.value.trim();
        if (value) {
            clearSearch.classList.remove('hidden');
            showSearchResults(value);
        } else {
            clearSearch.classList.add('hidden');
            showSuggestions();
        }
    });

    // Clear search
    clearSearch.addEventListener('click', function() {
        searchInput.value = '';
        clearSearch.classList.add('hidden');
        showSuggestions();
    });

    // Filter toggle
    filterToggle.addEventListener('click', function() {
        filterDropdown.classList.toggle('hidden');
    });

    // Apply filter
    applyFilter.addEventListener('click', function() {
        filterDropdown.classList.add('hidden');
    });

    // Reset filter
    resetFilter.addEventListener('click', function() {
        // Reset filter logic here
        filterDropdown.classList.add('hidden');
    });

    // Close dropdown when clicking outside
    document.addEventListener('click', function(e) {
        if (!filterToggle.contains(e.target) && !filterDropdown.contains(e.target)) {
            filterDropdown.classList.add('hidden');
        }
    });

    function showSuggestions() {
        suggestionsSection.classList.remove('hidden');
        searchResultsSection.classList.add('hidden');
        searchResultsHeader.classList.add('hidden');
        searchInput.placeholder = 'BẠN ĐANG TÌM KIẾM GÌ?';
    }

    function showSearchResults(query) {
        suggestionsSection.classList.add('hidden');
        searchResultsSection.classList.remove('hidden');
        searchResultsHeader.classList.remove('hidden');
        searchResultsText.textContent = `KẾT QUẢ TÌM KIẾM: "${query.toUpperCase()}"`;
        searchInput.placeholder = '';
    }
});
</script>
@endsection
