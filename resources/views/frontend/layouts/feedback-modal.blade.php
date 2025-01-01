<style>
    .wrapper {
        max-width: 65ch;
        margin: 0 auto;
        padding: 0 2rem;
    }

    .call-to-action-text {
        margin: 2rem 0;
        text-align: left;
    }

    .star-wrap {
        width: max-content;
        margin: 0 auto;
        position: relative;
    }

    .star-label.hidden {
        display: none;
    }

    .star-label {
        display: inline-flex;
        justify-content: center;
        align-items: center;
        width: 1rem;
        height: 1rem;
    }

    @media (min-width: 840px) {
        .star-label {
            width: 2rem;
            height: 2rem;
        }
    }

    .star-shape {
        background-color: gold;
        width: 80%;
        height: 80%;
        /*star shaped cutout, works  best if it is applied to a square*/
        /* from Clippy @ https://bennettfeely.com/clippy/ */
        clip-path: polygon(50% 0%,
                61% 35%,
                98% 35%,
                68% 57%,
                79% 91%,
                50% 70%,
                21% 91%,
                32% 57%,
                2% 35%,
                39% 35%);
    }

    /* make stars *after* the checked radio gray*/
    .star:checked+.star-label~.star-label .star-shape {
        background-color: lightgray;
    }

    /*hide away the actual radio inputs*/
    .star {
        position: fixed;
        opacity: 0;
        /*top: -90000px;*/
        left: -90000px;
    }

    .star:focus+.star-label {
        outline: 2px dotted black;
    }

    .skip-button {
        display: block;
        width: 2rem;
        height: 2rem;
        border-radius: 1rem;
        position: absolute;
        top: -2rem;
        right: -1rem;
        /*transform: translateY(-50%);*/
        text-align: center;
        line-height: 2rem;
        font-size: 2rem;
        background-color: rgba(255, 255, 255, 0.1);
    }

    .skip-button:hover {
        background-color: rgba(255, 255, 255, 0.2);
    }

    #skip-star:checked~.skip-button {
        display: none;
    }

    #result {
        text-align: center;
        padding: 1rem 2rem;
    }

    .exp-link {
        text-align: center;
        padding: 1rem 2rem;
    }

    .exp-link a {
        color: lightgray;
        text-decoration: underline;
    }
</style>



<!-- Modal -->
<div class="modal fade" id="feedbackForm" tabindex="-1" aria-labelledby="feedbackFormLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="feedbackFormLabel">Give us your Feedback</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="submitFeedbackForm" action="{{ route('frontend.store-feedback') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <input name="feedback-name" type="text" class="form-control" placeholder="Tell us Your Name"
                            value="{{ old('feedback-name') }}">
                    @error('feedback-name')
                        <span class="mt-2 small text-danger">{{ $message }}</span>
                    @enderror    
                    </div>
                    <div class="form-group">
                        <input name="feedback-email" type="text" class="form-control" placeholder="Enter your email address"
                            value="{{ old('feedback-email') }}">
                    @error('feedback-email')
                        <span class="mt-2 small text-danger">{{ $message }}</span>
                    @enderror    
                    </div>

                    <div>
                        <label id="title" class="call-to-action-text">Select a rating:</label>
                        <div class="star-wrap">
                            <input class="star" checked type="radio" value="-1" id="skip-star" name="feedback-rating"
                                autocomplete="off" />
                            <label class="star-label hidden"></label>
                            <input class="star" type="radio" id="st-1" value="1" name="feedback-rating"
                                autocomplete="off" />
                            <label class="star-label" for="st-1">
                                <div class="star-shape"></div>
                            </label>
                            <input class="star" type="radio" id="st-2" value="2" name="feedback-rating"
                                autocomplete="off" />
                            <label class="star-label" for="st-2">
                                <div class="star-shape"></div>
                            </label>
                            <input class="star" type="radio" id="st-3" value="3" name="feedback-rating"
                                autocomplete="off" />
                            <label class="star-label" for="st-3">
                                <div class="star-shape"></div>
                            </label>
                            <input class="star" type="radio" id="st-4" value="4" name="feedback-rating"
                                autocomplete="off" />
                            <label class="star-label" for="st-4">
                                <div class="star-shape"></div>
                            </label>
                            <input class="star" type="radio" id="st-5" value="5" name="feedback-rating"
                                autocomplete="off" />
                            <label class="star-label" for="st-5">
                                <div class="star-shape"></div>
                            </label>
                            <label class="skip-button" for="skip-star">
                                &times;
                            </label>

                            @error('feedback-rating')
                            <span class="d-block mt-2 small text-danger">{{ $message }}</span>
                            @enderror  
                        </div>

                        <p id="result">Not chosen</p>
                    </div>



                    <div class="form-group-2 mb-4">
                        <textarea name="feedback-message" class="form-control" rows="4" placeholder="Write your feedback.">{{ old('feedback-message') }}</textarea>
                        @error('feedback-message')
                            <span class="mt-2 small text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary"
                    onclick="document.getElementById('submitFeedbackForm').submit()">Save changes</button>
            </div>
        </div>
    </div>
</div>



<script>
    function displayValue() {
        starVal = document.forms["submitFeedbackForm"]["feedback-rating"].value;
        if (starVal == -1) {
            document.getElementById("result").innerText = "Not Chosen";
        } else {
            document.getElementById("result").innerText =
                "You chose: " + starVal +
                " out of 5.";
        }
    }
    document.addEventListener("DOMContentLoaded", () => {
        displayValue();
        document.forms["submitFeedbackForm"]["feedback-rating"].forEach((star) => {
            star.addEventListener("change", () => {
                displayValue();
            });
        });


        const triggerModal = @json(Session::get('trigger-feedback-form'));
        console.log('atest ', triggerModal);
        if (triggerModal) {
            const myModal = new bootstrap.Modal(document.getElementById('feedbackForm'))
   
            myModal.show();

        }

    });
</script>
