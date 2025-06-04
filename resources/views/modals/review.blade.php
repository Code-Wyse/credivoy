

    <style>
        .star-rating {
            line-height:32px;
            font-size:1.25em;
        }

        .star-rating .fa-star{color: yellow;}
    </style>

<div class="modal modalForAddReview mt-5 fade" id="modalForAddReview" tabindex="-1" role="dialog" aria-labelledby="modalForAddReviewTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered mt-5 pt-5 modal-lg" role="document">
        <div class="modal-content">

            <div class="modal-body">


                <!-- Main Content -->
                <main  class="">
                    <div id="rlr-review-from" class="">
                        <section class="rlr-section  row justify-content-center">
                            <div class="">
                                <form action="{{route("review.store")}}" id="reviewForm" method="POST">
                                    @csrf
                                    <input type="hidden" name="tour_id" value="{{$tour->id}}">
                                <fieldset class="rlr-review-form__fieldset">

                                    <legend class="rlr-review-form__hidden-legend">Write a review</legend>
                                    <!-- Section heading -->
                                    <div class="rlr-section__heading">
                                        <h1 class="rlr-section__heading--main">Write a review</h1>
                                        <span class="rlr-section__heading--sub">Review helps other travelers so please be mindful while reviewing.</span>
                                    </div>
                                    <div class="rlr-fieldrow">
                                        <div class="rlr-fieldrow__form-element">
                                            <div class="rlr-fieldrow__item">
                                                <label class="rlr-form-label rlr-form-label--dark" for="rlr_review_form_title"> Set a title </label>
                                                <input required type="text" autocomplete="off" maxlength="70" id="rlr_review_form_title" class="form-control" placeholder="Please Enter Title" name="title" />
                                            </div>
                                            <div class="rlr-fieldrow__item">
                                                <label class="rlr-form-label rlr-form-label--dark" for="rlr_review_form_desc"> What did you like or dislike? </label>
                                                <textarea name="review" require id="rlr_review_form_desc" class="form-control form-control--text-area" placeholder="Provide more information for travelers to find your starting point easily, for example, opposite to the xyz landmark building" rows="12"></textarea>
                                            </div>

                                            <div class="rlr-fieldrow__item">

                                                <div class="">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="star-rating">
                                                                <span class="fa fa-star-o" data-rating="1"></span>
                                                                <span class="fa fa-star-o" data-rating="2"></span>
                                                                <span class="fa fa-star-o" data-rating="3"></span>
                                                                <span class="fa fa-star-o" data-rating="4"></span>
                                                                <span class="fa fa-star-o" data-rating="5"></span>
                                                                <input type="hidden" name="rating" class="rating-value" value="2.56">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                {{--                                                <div class="rlr-rating-stars">--}}
{{--                                                    <span class="rlr-rating-stars__label">How many stars should they get?</span>--}}
{{--                                                    <div class="rlr-rating-stars__iconset">--}}
{{--                                                        <i class="rlr-icon-font flaticon-star-1"> </i> <i class="rlr-icon-font flaticon-star-1"> </i> <i class="rlr-icon-font flaticon-star-1"> </i> <i class="rlr-icon-font flaticon-star-1"> </i> <i class="rlr-icon-font flaticon-star"> </i>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}


                                            </div>


                                        </div>
                                    </div>
                                    <div class="rlr-review-form__buttons">
                                        <button type="button"  onClick="this.form.submit(); this.disabled=true; this.value='Sending…'; "
                                                class="reviewFormSubmitBtn btn rlr-button rlr-review-form__submit  mt-2 rlr-button--small rlr-button--rounded rlr-button--brand">Submit</button>
                                        <div class="container">
                                            <span id="rateMe1"></span>
                                        </div>

                                      </div>
                                </fieldset>
                            </div>
                        </section>
                    </div>
                </main>
            </div>

        </div>
    </div>
</div>


