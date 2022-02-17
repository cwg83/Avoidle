<html>
    <head>
        <title>Avoidle Word Game</title>
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <meta name="author" content="calvin goodale" />
        <meta charset="UTF-8" />
        <meta http-equiv="Content-Type" content="text/html; charset=euc-jp" />
        <meta content="width=device-width, initial-scale=1.0" name="viewport" />
        <link rel="stylesheet/less" type="text/css" href="styles/avoidle.css" />
        <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png" />
        <link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png" />
        <link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png" />
        <link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png" />
        <link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png" />
        <link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png" />
        <link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png" />
        <link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png" />
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png" />
        <link rel="icon" type="image/png" sizes="192x192" href="/android-icon-192x192.png" />
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png" />
        <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png" />
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png" />
        <link rel="manifest" href="/manifest.json" />
        <meta name="msapplication-TileColor" content="#ffffff" />
        <meta name="msapplication-TileImage" content="/ms-icon-144x144.png" />
        <meta name="theme-color" content="#ffffff" />
        <script src="//cdnjs.cloudflare.com/ajax/libs/less.js/3.9.0/less.min.js"></script>
    </head>

    <body>
        <header>
            <div class="menu-left">
                <button id="help-button" class="icon" aria-label="Help" tabindex="-1">
                    <svg width="40" height="40">
                        <circle cx="20" cy="20" r="15" fill="black" />
                        <text x="50%" y="50%" text-anchor="middle" fill="white" font-size="24px" font-family="Arial" font-weight="bold" dy=".35em">?</text>
                        ❔
                    </svg>
                </button>
            </div>
            <div class="title">
                Avoidle
            </div>
            <div class="menu-right"></div>
        </header>
        <div id="game">
            <div class="scoreboard">
                Current Score:
                <span class="score">0</span>
            </div>
            <div class="invalid-word-message">
                <div class="invalid-message">
                    Not in word list
                </div>
            </div>
            <div class="container">
                <div class="board">
                    <div class="row row-1">
                        <div class="slot">
                            <div class="tile" data-state="empty"></div>
                        </div>
                        <div class="slot">
                            <div class="tile" data-state="empty"></div>
                        </div>
                        <div class="slot">
                            <div class="tile" data-state="empty"></div>
                        </div>
                        <div class="slot">
                            <div class="tile" data-state="empty"></div>
                        </div>
                        <div class="slot">
                            <div class="tile" data-state="empty"></div>
                        </div>
                    </div>
                    <div class="row row-2">
                        <div class="slot">
                            <div class="tile" data-state="empty"></div>
                        </div>
                        <div class="slot">
                            <div class="tile" data-state="empty"></div>
                        </div>
                        <div class="slot">
                            <div class="tile" data-state="empty"></div>
                        </div>
                        <div class="slot">
                            <div class="tile" data-state="empty"></div>
                        </div>
                        <div class="slot">
                            <div class="tile" data-state="empty"></div>
                        </div>
                    </div>
                    <div class="row row-3">
                        <div class="slot">
                            <div class="tile" data-state="empty"></div>
                        </div>
                        <div class="slot">
                            <div class="tile" data-state="empty"></div>
                        </div>
                        <div class="slot">
                            <div class="tile" data-state="empty"></div>
                        </div>
                        <div class="slot">
                            <div class="tile" data-state="empty"></div>
                        </div>
                        <div class="slot">
                            <div class="tile" data-state="empty"></div>
                        </div>
                    </div>
                    <div class="row row-4">
                        <div class="slot">
                            <div class="tile" data-state="empty"></div>
                        </div>
                        <div class="slot">
                            <div class="tile" data-state="empty"></div>
                        </div>
                        <div class="slot">
                            <div class="tile" data-state="empty"></div>
                        </div>
                        <div class="slot">
                            <div class="tile" data-state="empty"></div>
                        </div>
                        <div class="slot">
                            <div class="tile" data-state="empty"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="solution-container">
                <div class="solution-board">
                    <div class="row row-solution">
                        <div class="slot">
                            <div class="tile" data-state="submitted"></div>
                        </div>
                        <div class="slot">
                            <div class="tile" data-state="submitted"></div>
                        </div>
                        <div class="slot">
                            <div class="tile" data-state="submitted"></div>
                        </div>
                        <div class="slot">
                            <div class="tile" data-state="submitted"></div>
                        </div>
                        <div class="slot">
                            <div class="tile" data-state="submitted"></div>
                        </div>
                        <div class="slot">
                            <div class="tile" data-state="submitted"></div>
                        </div>
                    </div>
                </div>
            </div>
            <game-keyboard>
                <div id="keyboard">
                    <div class="keyboard-row">
                        <button data-key="q" data-state="">q</button>
                        <button data-key="w" data-state="">w</button>
                        <button data-key="e" data-state="">e</button>
                        <button data-key="r" data-state="">r</button>
                        <button data-key="t" data-state="">t</button>
                        <button data-key="y" data-state="">y</button>
                        <button data-key="u" data-state="">u</button>
                        <button data-key="i" data-state="">i</button>
                        <button data-key="o" data-state="">o</button>
                        <button data-key="p" data-state="">p</button>
                    </div>
                    <div class="keyboard-row">
                        <div class="spacer half"></div>
                        <button data-key="a" data-state="">a</button>
                        <button data-key="s" data-state="">s</button>
                        <button data-key="d" data-state="">d</button>
                        <button data-key="f" data-state="">f</button>
                        <button data-key="g" data-state="">g</button>
                        <button data-key="h" data-state="">h</button>
                        <button data-key="j" data-state="">j</button>
                        <button data-key="k" data-state="">k</button>
                        <button data-key="l" data-state="">l</button>
                        <div class="spacer half"></div>
                    </div>
                    <div class="keyboard-row">
                        <button data-key="Enter" class="one-and-a-half">enter</button>
                        <button data-key="z" data-state="">z</button>
                        <button data-key="x" data-state="">x</button>
                        <button data-key="c" data-state="">c</button>
                        <button data-key="v" data-state="">v</button>
                        <button data-key="b" data-state="">b</button>
                        <button data-key="n" data-state="">n</button>
                        <button data-key="m" data-state="">m</button>
                        <button data-key="Backspace" class="backspace one-and-a-half">←</button>
                    </div>
                </div>
            </game-keyboard>
            <div class="overlay">
                <div class="pop-up-end">
                    <div class="close-icon-end">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
                            <path fill="var(--color-tone-1)" d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"></path>
                        </svg>
                    </div>
                    <div class="popup-top"></div>
                    <div class="pop-up-middle-end">
                        <div class="statistics">
                            <div class="overlay-scoreboard">
                                <div class="date-div">Avoidle <span class="date"></span></div>
                                <div class="avoid-letters-div">Letters: <span class="avoid-letters"></span></div>
                                <div class="final-score">Final score: <span class="overlay-score"></span></div>
                            </div>
                            <div class="emojis">
                                <div class="copy-row-1"></div>
                                <div class="copy-row-2"></div>
                                <div class="copy-row-3"></div>
                                <div class="copy-row-4"></div>
                            </div>
                        </div>
                    </div>
                    <div class="pop-up-footer-end">
                        <div class="countdown">
                            <p>NEXT AVOIDLE</p>
                            <div class="timer"></div>
                        </div>
                        <div class="share">
                            <button id="share-button">
                                Share
                            </button>
                        </div>
                    </div>
                </div>
                <div class="pop-up-instructions">
                    <div class="close-icon-instructions">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
                            <path fill="var(--color-tone-1)" d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"></path>
                        </svg>
                    </div>
                    <div class="popup-top">
                        HOW TO PLAY
                    </div>
                    <div class="pop-up-middle-instructions">
                        <div class="instructions">
                            <p>While trying to avoid the letters in red at the bottom, enter 4 five-letter words that combined use as many of the remaining letters of the alphabet as you can.</p>
                            <p>Using red letters in your word is allowed, but you will not score points for them. You will also not score points for a letter that you've already used, so the max score is <b>20</b>.</p>
                        </div>
                        <div class="example-section">
                            <div class="example">
                                <p><b>Examples:</b></p>
                                <div class="row">
                                    <div class="slot">
                                        <div class="tile example-tile" data-state="submitted-not-in-word">J</div>
                                    </div>
                                    <div class="slot">
                                        <div class="tile example-tile" data-state="submitted-not-in-word">U</div>
                                    </div>
                                    <div class="slot">
                                        <div class="tile example-tile" data-state="submitted-not-in-word">N</div>
                                    </div>
                                    <div class="slot">
                                        <div class="tile example-tile" data-state="submitted-in-word">K</div>
                                    </div>
                                    <div class="slot">
                                        <div class="tile example-tile" data-state="submitted-not-in-word">Y</div>
                                    </div>
                                </div>
                            </div>
                            <p class="example-text">The letter <b>K</b> is a red letter, so JUNKY is worth 4 points.</p>
                            <div class="example">
                                <div class="row">
                                    <div class="slot">
                                        <div class="tile example-tile" data-state="submitted-not-in-word">L</div>
                                    </div>
                                    <div class="slot">
                                        <div class="tile example-tile" data-state="submitted-not-in-word">E</div>
                                    </div>
                                    <div class="slot">
                                        <div class="tile example-tile" data-state="submitted-not-in-word">A</div>
                                    </div>
                                    <div class="slot">
                                        <div class="tile example-tile" data-state="submitted-not-in-word">F</div>
                                    </div>
                                    <div class="slot">
                                        <div class="tile example-tile" data-state="submitted-guessed">Y</div>
                                    </div>
                                </div>
                            </div>
                            <p class="example-text">The letter <b>Y</b> has already been guessed, so LEAFY is worth 4 points.</p>
                            <div class="example">
                                <div class="row">
                                    <div class="slot">
                                        <div class="tile example-tile" data-state="submitted-not-in-word">W</div>
                                    </div>
                                    <div class="slot">
                                        <div class="tile example-tile" data-state="submitted-not-in-word">I</div>
                                    </div>
                                    <div class="slot">
                                        <div class="tile example-tile" data-state="submitted-not-in-word">T</div>
                                    </div>
                                    <div class="slot">
                                        <div class="tile example-tile" data-state="submitted-not-in-word">C</div>
                                    </div>
                                    <div class="slot">
                                        <div class="tile example-tile" data-state="submitted-not-in-word">H</div>
                                    </div>
                                </div>
                            </div>
                            <p class="example-text">None of the letters are in red or were used previously, so WITCH is worth the full 5 points.</p>
                        </div>
                        <div class="example-solution">
                            <div class="row row-solution">
                                <div class="slot">
                                    <div class="tile example-tile" data-state="submitted">V</div>
                                </div>
                                <div class="slot">
                                    <div class="tile example-tile" data-state="submitted">K</div>
                                </div>
                                <div class="slot">
                                    <div class="tile example-tile" data-state="submitted">X</div>
                                </div>
                                <div class="slot">
                                    <div class="tile example-tile" data-state="submitted">B</div>
                                </div>
                                <div class="slot">
                                    <div class="tile example-tile" data-state="submitted">S</div>
                                </div>
                                <div class="slot">
                                    <div class="tile example-tile" data-state="submitted">Z</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pop-up-footer-instructions">
                        A new AVOIDLE will be available each day!
                    </div>
                </div>
            </div>
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.2/rollups/aes.js"></script>
        <script type="text/javascript" src="js/avoidle.js"></script>
    </body>

    <footer></footer>
</html>
