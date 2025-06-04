

function returnMedia(mediaFile) {
    if (mediaFile.includes('http')) {
        return mediaFile;
    } else {
        return `${baseUrl}${mediaFile}`;
    }
}
const getSingleTourHtml = (tour) => {
    // Generate media HTML
    let mediaHtml = '';
    if (tour.media && tour.media.length > 0) {
        tour.media.forEach((media) => {
            if (media.mime === "image/jpg" || media.mime === "image/png" || media.mime == "image/jpeg") {
                mediaHtml += `
                <div class="swiper-slide">
                    <img src="${returnMedia(media.media_file)}" itemprop="image" data-sizes="auto" data-src="${returnMedia(media.media_file)}" data-srcset="${returnMedia(media.media_file)}" class="lazyload tour-pic" alt="${media.alt_text}" />
                </div>`;
            }
        });
    }

    // Return the complete HTML for a single tour
    return `
    
        <div class="main_boxx box2">
                    <div class="deomestic_img">
                             ${mediaHtml}
                             ${tour.is_featured ? '<div class="fav features">featured</div>' : ''}

                                            </div>
                    <div class="demestic_content">
                        <div class="meta_itemss right_items main_travel_company-des">
                       
                                <div class="first-inner-company">
                                    <div class="comp-logo">
                                        <img src="assets/images/circle-company.png" alt="">
                                    </div>
                                    <div class="comp-name">
                                        <h4>Siyah Travels</h4>
                                    </div>
                                </div>
                                <div class="second-first-inner-company">
                                    <div class="inner-company-rating">
                                        <h3><span><svg class="svg-inline--fa fa-star" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path></svg><!-- <i class="fa-solid fa-star"></i> Font Awesome fontawesome.com --></span> &nbsp; 5.0</h3>
                                    </div>
                                </div>
                            
                        </div>
                        <div class="item_title">
                            <a href="${toursUrl}/${tour.slug}">
                                <h2>${tour.title}</h2>
                            </a>
                        </div>
                        <div class="item_locations">
                            <svg class="svg-inline--fa fa-location-dot" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="location-dot" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg=""><path fill="currentColor" d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z"></path></svg><!-- <i class="fa-solid fa-location-dot"></i> Font Awesome fontawesome.com --> <span>Skardu Valley</span>
                        </div>
                        <div class="right_items hello">
                            <span class="dayss">
                                <svg class="svg-inline--fa fa-calendar" aria-hidden="true" focusable="false" data-prefix="far" data-icon="calendar" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M152 24c0-13.3-10.7-24-24-24s-24 10.7-24 24V64H64C28.7 64 0 92.7 0 128v16 48V448c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V192 144 128c0-35.3-28.7-64-64-64H344V24c0-13.3-10.7-24-24-24s-24 10.7-24 24V64H152V24zM48 192H400V448c0 8.8-7.2 16-16 16H64c-8.8 0-16-7.2-16-16V192z"></path></svg><!-- <i class="fa-regular fa-calendar"></i> Font Awesome fontawesome.com -->
                                <span> ${tour.duration} Days</span>
                            </span>
                            <span class="users">
                                <svg class="svg-inline--fa fa-user" aria-hidden="true" focusable="false" data-prefix="far" data-icon="user" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M304 128a80 80 0 1 0 -160 0 80 80 0 1 0 160 0zM96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM49.3 464H398.7c-8.9-63.3-63.3-112-129-112H178.3c-65.7 0-120.1 48.7-129 112zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3z"></path></svg><!-- <i class="fa-regular fa-user"></i> Font Awesome fontawesome.com -->
                                <span>21</span>
                            </span>
                        </div>
                        <div class="item_bottom">
                            <div class="item_price">
                                <h6>Starting From</h6>
                                <h3>PKR <strong>${number_format(tour.price)}</strong></h3>

                            </div>
                            <div class="item_explore">
                                <a href="${toursUrl}/${tour.slug}">Explore <svg class="svg-inline--fa fa-arrow-right" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="arrow-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z"></path></svg><!-- <i class="fa-solid fa-arrow-right"></i> Font Awesome fontawesome.com --></a>
                            </div>
                        </div>
                    </div>

                </div>



    
    
    
    
    
   
    
    `;
};


let currentPage = 1;
let totalPages = 1;


let currentRequest = null;

function fetchTours(page = 1, refresh = true) {
    let filters = getAllQueryParams();
    if (currentRequest) {
        currentRequest.abort();
    }
    currentRequest = $.get(`${toursUrl}?page=${page}`, filters, function(data) {
        if (data.status === "success") {
            const tours = data.data.tours.data;
            if (refresh) {
                $(".tour_list-container-appends").html('');
            }
            tours.forEach(tour => {
                const tourHtml = getSingleTourHtml(tour);
                $(".tour_list-container-appends").append(tourHtml);
            });
            currentPage = data.data.tours.current_page;
            totalPages = data.data.tours.last_page;
            $("#showingResult").text(data.data.tours.to);
            $("#showingResultOf").text(data.data.tours.total);

            if (currentPage < totalPages) {
                $('#load-more').show();
            } else {
                $('#load-more').hide();
            }
        }
    });

    // Handle the completion of the request
    currentRequest.always(function() {
        currentRequest = null; // Clear the current request when it is done
    });
}


fetchTours(currentPage,false);

// Load more button click event
$('#load-more').on('click', function() {
    if (currentPage < totalPages) {
        fetchTours(currentPage + 1,false);
    }
});

function getAllQueryParams() {
    const queryString = window.location.search;
    const urlParams = new URLSearchParams(queryString);
    const queryParams = {};

    for (const [key, value] of urlParams.entries()) {
        queryParams[key] = queryParams[key] ? [].concat(queryParams[key], value) : value;
    }
    return queryParams;
}
function updateUrlParameter(variable, value) {
    var url = window.location.href;
    url = decodeURIComponent(url);
    var hasQueryString = url.indexOf('?') !== -1;
    var urlObj = new URL(url);
    urlObj.searchParams.set(variable, value);
    var newUrl = urlObj.toString();
    window.history.pushState({path: newUrl}, '', newUrl);
    fetchTours( );
}

$("#rangeMin, #rangeMax").on('change',function(){
    const range = $('#rangeMin').val()+"_"+$('#rangeMax').val();
    updateUrlParameter('price_range',range)
})


$("input[name='duration']").on('change',function(){
    const val = $(this).val();
    if($(this).is(":checked")){
        durations.push(val)
    }else{
        durations = durations.filter(duration => duration !== val);
    }
    updateUrlParameter('duration',durations);
})


$("input[name='category']").on('change',function(){
    const val = $(this).val();
    if($(this).is(":checked")){
        categories.push(val)
    }else{
        categories = categories.filter(duration => duration !== val);
    }
    updateUrlParameter('categories',categories);
})

