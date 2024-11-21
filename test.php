<!DOCTYPE html>
<html>
<head>
    <style>
        #aiDetector .api-error {
            position: absolute;
            padding: 8px 16px;
            top: 12px;
            left: 50%;
            transform: translate(-50%, -50%);
            background: #DC3D43;
            box-shadow: 0px 4px 6px -1px rgba(0, 0, 0, 0.1), 0px 2px 4px -2px rgba(0, 0, 0, 0.1);
            border-radius: 6px;
        }

        #aiDetector .api-error span {
            color: #fff !important;
        }

        #aiDetector .buttons {
            padding: 15px 0;
        }

        #aiDetector .btn:disabled {
            opacity: 0.5;
            cursor: default;
        }

        #aiDetector .btn--clear {
            border: 1px solid #D4D8E8;
        }

        #aiDetector .percentage-bar {
            width: 100%;
            position: relative;
            overflow: hidden;
            margin: 10px 0;
        }

        #aiDetector .results .wrapper {
            padding-bottom: 10px;
        }

        #aiDetector .results .services a.btn {
            color: #fff;
        }

        #aiDetector h3 {
            color: #202F66;
            font-size: 30px;
        }

        #aiDetector .results-text span {
            font-weight: 600;
        }
    </style>
</head>
<body>
<div class="d-flex flex-column align-items-center">
    <div class="d-inline-block">
        <h1>Free <span class="text-purple-gradient">AI Content Detector</span></h1>
        <p class="intro-text">Detect AI-generated content like ChatGPT3.5, GPT4 and Google Bard in seconds</p>
    </div>
    <div class="header--form_wrapper mt-md-5 w-100" style="order: unset;">
        <div class="upload-form" style="height:auto;">
            <div class="row">
                <div class="col-lg-12 pb-0 px-0">
                    <div id="aiDetector" class="w-100 d-lg-flex">
                        <div class="main-input col-9 p-0">
                            <div class="examples py-3 text-left">
                                <span>Examples: </span>
                                <span class="btn--example">ChatGPT</span>
                                <span class="btn--example">Bard</span>
                                <span class="btn--example">Human</span>
                                <span class="btn--example">AI + Human</span>
                            </div>
                            <div class="api-error d-none"><span>We could not analyze your text. Please try again.</span></div>
                            <div class="content p-3" role="textbox" contenteditable="true"
                                 placeholder="Paste your text in here. To get good a result we recommend between 25 and 500 words."></div>
                            <div class="row mx-0 buttons align-items-center">
                                <div class="word-counter invisible col-lg-8 text-left pl-0">
                                    <span class="words">0</span><span class="text-muted">/500 words </span>
                                    <span class="count-error">  </span>
                                </div>
                                <div class="col-lg text-right ml-auto px-0">
                                    <button class="btn btn--purple-gradient btn--small" id="aiDetectorButton">Analyze text</button>
                                </div>
                            </div>
                        </div>
                        <div class="results h-100 flex-column pt-3 col">
                            <div class="d-flex justify-content-center flex-column align-items-center align-self-center w-100 my-auto">
                                <span class="percentage purple d-block text-center text-purple-gradient">%</span>
                                <span class="results-text text-center font-weight-bold w-100">AI detection score</span>
                                <div class="wrapper w-100">
                                    <div class="percentage-bar align-self-center">
                                        <div class="percentage-bar-fill" id="barFill"></div>
                                    </div>
                                    <div class="results-text w-100 d-flex justify-content-between">
                                        <span class="real">Human</span>
                                        <span class="ai">AI</span>
                                    </div>
                                </div>
                                <div class="services mx-0 mt-4 text-left align-items-center w-100 d-none">
                                    <p class="font-weight-bold text-top mb-0">Next: Run a <span class="text-purple-gradient">plagiarism check</span></p>
                                    <ul class="kb-checklist">
                                        <li>Powered by Turnitin</li>
                                        <li>Checked against over 99 billion sources</li>
                                        <li>With AI spelling &amp; grammar checking</li>
                                    </ul>
                                    <a href="#" class="btn btn--purple-gradient w-100 btn--small">Start free plagiarism check</a>
                                    <a id="seeFeatures" href="#aiDetectorServices" class="title d-block text-center mt-2">See all premium advantages</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
