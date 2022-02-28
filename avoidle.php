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

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-871K7GXQX4"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-871K7GXQX4');
        </script>
    </head>

    <body>
        <header>

            <div class="menu-left">
                <button id="help-button" class="icon" aria-label="Help" tabindex="-1">
                    <svg width="40" height="40">
                        <circle cx="20" cy="20" r="10" fill="black" />
                        <text x="50%" y="50%" text-anchor="middle" fill="white" font-size="18px" font-family="Arial" font-weight="bold" dy=".35em">?</text>
                        ❔
                    </svg>
                </button>
            </div>

            <div class="title">
                Avoidle
            </div>

            <div class="menu-right">
                <button id="stats-button" class="icon" aria-label="Stats" tabindex = "-1">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
                        <path d="M16,11V3H8v6H2v12h20V11H16z M10,5h4v14h-4V5z M4,11h4v8H4V11z M20,19h-4v-6h4V19z"></path>
                    </svg>
                </button>
                <button id="settings-button" class="icon" aria-label="Settings" tabindex="-1">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
                        <path d="M19.14,12.94c0.04-0.3,0.06-0.61,0.06-0.94c0-0.32-0.02-0.64-0.07-0.94l2.03-1.58c0.18-0.14,0.23-0.41,0.12-0.61 l-1.92-3.32c-0.12-0.22-0.37-0.29-0.59-0.22l-2.39,0.96c-0.5-0.38-1.03-0.7-1.62-0.94L14.4,2.81c-0.04-0.24-0.24-0.41-0.48-0.41 h-3.84c-0.24,0-0.43,0.17-0.47,0.41L9.25,5.35C8.66,5.59,8.12,5.92,7.63,6.29L5.24,5.33c-0.22-0.08-0.47,0-0.59,0.22L2.74,8.87 C2.62,9.08,2.66,9.34,2.86,9.48l2.03,1.58C4.84,11.36,4.8,11.69,4.8,12s0.02,0.64,0.07,0.94l-2.03,1.58 c-0.18,0.14-0.23,0.41-0.12,0.61l1.92,3.32c0.12,0.22,0.37,0.29,0.59,0.22l2.39-0.96c0.5,0.38,1.03,0.7,1.62,0.94l0.36,2.54 c0.05,0.24,0.24,0.41,0.48,0.41h3.84c0.24,0,0.44-0.17,0.47-0.41l0.36-2.54c0.59-0.24,1.13-0.56,1.62-0.94l2.39,0.96 c0.22,0.08,0.47,0,0.59-0.22l1.92-3.32c0.12-0.22,0.07-0.47-0.12-0.61L19.14,12.94z M12,15.6c-1.98,0-3.6-1.62-3.6-3.6 s1.62-3.6,3.6-3.6s3.6,1.62,3.6,3.6S13.98,15.6,12,15.6z"></path>
                    </svg>
                </button>
            </div>

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
                    <div class="row row-1" data-score="0">
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
                        <div class="row-delete delete-row-1">
                            <div class="delete-button">
                                <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
                                    <path fill="var(--color-tone-1)" d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"></path>
                                </svg>
                            </div>
                        </div>
                    </div>

                    <div class="row row-2" data-score="0">
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
                        <div class="row-delete delete-row-2">
                            <div class="delete-button">
                                <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
                                    <path fill="var(--color-tone-1)" d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="row row-3" data-score="0">
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
                        <div class="row-delete delete-row-3">
                            <div class="delete-button">
                                <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
                                    <path fill="var(--color-tone-1)" d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"></path>
                                </svg>
                            </div>      
                        </div>
                    </div>
                    <div class="row row-4" data-score="0">
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
                        <div class="row-delete delete-row-4">
                            <div class="delete-button">
                                <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
                                    <path fill="var(--color-tone-1)" d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"></path>
                                </svg>
                            </div>      
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
                        <button class="keyboard-button" data-key="q" data-state="empty">q</button>
                        <button class="keyboard-button" data-key="w" data-state="empty">w</button>
                        <button class="keyboard-button" data-key="e" data-state="empty">e</button>
                        <button class="keyboard-button" data-key="r" data-state="empty">r</button>
                        <button class="keyboard-button" data-key="t" data-state="empty">t</button>
                        <button class="keyboard-button" data-key="y" data-state="empty">y</button>
                        <button class="keyboard-button" data-key="u" data-state="empty">u</button>
                        <button class="keyboard-button" data-key="i" data-state="empty">i</button>
                        <button class="keyboard-button" data-key="o" data-state="empty">o</button>
                        <button class="keyboard-button" data-key="p" data-state="empty">p</button>
                    </div>
                    <div class="keyboard-row">
                        <div class="spacer half"></div>
                        <button class="keyboard-button" data-key="a" data-state="empty">a</button>
                        <button class="keyboard-button" data-key="s" data-state="empty">s</button>
                        <button class="keyboard-button" data-key="d" data-state="empty">d</button>
                        <button class="keyboard-button" data-key="f" data-state="empty">f</button>
                        <button class="keyboard-button" data-key="g" data-state="empty">g</button>
                        <button class="keyboard-button" data-key="h" data-state="empty">h</button>
                        <button class="keyboard-button" data-key="j" data-state="empty">j</button>
                        <button class="keyboard-button" data-key="k" data-state="empty">k</button>
                        <button class="keyboard-button" data-key="l" data-state="empty">l</button>
                        <div class="spacer half"></div>
                    </div>
                    <div class="keyboard-row">
                        <button class="keyboard-button one-and-a-half" data-key="Enter" data-state="empty">enter</button>
                        <button class="keyboard-button" data-key="z" data-state="empty">z</button>
                        <button class="keyboard-button" data-key="x" data-state="empty">x</button>
                        <button class="keyboard-button" data-key="c" data-state="empty">c</button>
                        <button class="keyboard-button" data-key="v" data-state="empty">v</button>
                        <button class="keyboard-button" data-key="b" data-state="empty">b</button>
                        <button class="keyboard-button" data-key="n" data-state="empty">n</button>
                        <button class="keyboard-button" data-key="m" data-state="empty">m</button>
                        <button class="keyboard-button one-and-a-half" data-key="Backspace" data-state="empty">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
                                <path d="M22 3H7c-.69 0-1.23.35-1.59.88L0 12l5.41 8.11c.36.53.9.89 1.59.89h15c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 16H7.07L2.4 12l4.66-7H22v14zm-11.59-2L14 13.41 17.59 17 19 15.59 15.41 12 19 8.41 17.59 7 14 10.59 10.41 7 9 8.41 12.59 12 9 15.59z"></path>
                            </svg>
                            <path fill="var(--color-tone-1)" d="M22 3H7c-.69 0-1.23.35-1.59.88L0 12l5.41 8.11c.36.53.9.89 1.59.89h15c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 16H7.07L2.4 12l4.66-7H22v14zm-11.59-2L14 13.41 17.59 17 19 15.59 15.41 12 19 8.41 17.59 7 14 10.59 10.41 7 9 8.41 12.59 12 9 15.59z"></path>
                        </button>
                    </div>
                </div>
            </game-keyboard>
            
            <div class="overlay">

                <div class="pop-up pop-up-settings">
     
                    <div class="popup-top">
                        SETTINGS
                    <div class="close-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
                            <path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"></path>
                        </svg>
                    </div>
                    </div>
                    <div class="settings-middle">
                        <div class="settings-container">

                            <div class="setting">
                                <div class="setting-left">
                                    <div class="setting-header">
                                        Dark Theme
                                    </div>
                                    <div class="setting-description">
                                    </div>
                                </div>
                                <div class="setting-right">
                                    <label class="switch">
                                        <input type="checkbox" class="nightmode-switch" onchange="nightModeSwitch(this)">
                                        <span class="slider round"></span>
                                    </label>
                                </div>
                            </div>

                            <div class="setting">
                                <div class="setting-left">
                                    <div class="setting-header">
                                        Feedback
                                    </div>
                                    <div class="setting-description">
                                    </div>
                                </div>
                                <div class="setting-right">
                                    <a href="mailto:avoidlegame@gmail.com">Email</a>
                                </div>
                            </div>

                            <div class="setting">
                                <div class="setting-left">
                                    <div class="setting-header">
                                        Community
                                    </div>
                                    <div class="setting-description">
                                    </div>
                                </div>
                                <div class="setting-right">
                                    <a href="https://twitter.com/AvoidleGame">Twitter</a>
                                </div>
                            </div>

                            <div class="setting">
                                <div class="setting-left">
                                    <div class="setting-header">
                                        Questions?
                                    </div>
                                    <div class="setting-description">
                                    </div>
                                </div>
                                <div class="setting-right">
                                    <a id="faq-link" href="#">FAQ</a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="settings-footer">
                    </div>
                </div>

                <div class="pop-up pop-up-faq">
     
                    <div class="popup-top">
                        FAQ
                        <div class="faq-close-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
                                <path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"></path>
                            </svg>
                        </div> 
                    </div>

                    <div class="faq-middle">

                        <div class="faq-item">
                            <div class="faq-header">
                                Which word list do you use?
                            </div>
                            <div class="faq-text">
                                <p>
                                    Unlike Wordle, which uses a curated list of valid five-letter words, Avoidle uses the official NASPA Word List 2020 Edition (NWL2020), 
                                    which is the official lexicon for competitive Scrabble play. The NWL2020 is incredibly expansive, which means there are many more words allowed, 
                                    including many words that are not often used in normal conversation. This allows the player a bit more freedom in the words they can use, 
                                    which should make scoring 20 points a more reasonable goal.
                                </p>
                                <p>
                                    For more information on the NWL2020 list, please see here: <a href="https://scrabbleplayers.org/w/NWL2020">NWL2020</a>
                                </p>
                            </div>
                        </div>

                        <div class="faq-item">
                            <div class="faq-header">
                                I was able to submit an offensive word, and now I'm offended.
                            </div>
                            <div class="faq-text">
                                <p>
                                    Although the official NWL2020 does not allow many words that are deemed to be "personally applicable offensive slurs", 
                                    it does allow swear words and other words that some people may find offensive. If you don't feel comfortable using these words in your play, 
                                    then that is your choice.
                                </p>
                            </div>
                        </div>

                    </div>

                    <div class="faq-footer">
                    </div>

                </div>

                <div class="pop-up pop-up-stats">
                    <div class="close-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
                            <path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"></path>
                        </svg>
                    </div>
                    <div class="popup-top"></div>
                    <div class="stats-middle">
                        <h3>STATS</h3>
                        <div class="statistics">
                            <div class="statistic-container">
                                <div class="statistic games-played">0</div>
                                <div class="statistic-label">
                                    Games Played
                                </div>
                            </div>
                            <div class="statistic-container">
                                <div class="statistic average-score">0</div>
                                <div class="statistic-label">
                                    Average Score
                                </div>
                            </div>
                        </div>
                        <h3>POINTS DISTRIBUTION</h3>
                        <div class="stats-graph">

                            <div class="graph">
                                <div class="points">20</div>
                                <div class="graph-bar-container">
                                    <div class="graph-bar" id="bar20">0</div>
                                </div>
                            </div>

                            <div class="graph">
                                <div class="points">19</div>
                                <div class="graph-bar-container">
                                    <div class="graph-bar" id="bar19">0</div>
                                </div>
                            </div>

                            <div class="graph">
                                <div class="points">18</div>
                                <div class="graph-bar-container">
                                    <div class="graph-bar" id="bar18">0</div>
                                </div>
                            </div>

                            <div class="graph">
                                <div class="points">15-17</div>
                                <div class="graph-bar-container">
                                    <div class="graph-bar" id="bar1517">0</div>
                                </div>
                            </div>

                            <div class="graph">
                                <div class="points">10-14</div>
                                <div class="graph-bar-container">
                                    <div class="graph-bar" id="bar1014">0</div>
                                </div>
                            </div>

                            <div class="graph">
                                <div class="points">&lt;10</div>
                                <div class="graph-bar-container">
                                    <div class="graph-bar" id="barless10">0</div>
                                </div>
                            </div>

                        </div>
                        <div class="overlay-scoreboard">
                            <div class="date-div">Avoidle <span class="date"></span></div>
                            <div class="avoid-letters-div">Letters: <span class="avoid-letters"></span></div>
                            <div class="final-score">Final score: <span class="overlay-score"></span></div>
                            <div class="emojis">
                                <div class="copy-row copy-row-1"></div>
                                <div class="copy-row copy-row-2"></div>
                                <div class="copy-row copy-row-3"></div>
                                <div class="copy-row copy-row-4"></div>
                            </div>
                        </div>
     
                    </div>
                    <div class="stats-footer">
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

                <div class="pop-up pop-up-instructions">
                    <div class="close-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
                            <path fill="var(--color-tone-1)" d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"></path>
                        </svg>
                    </div>
                    <div class="popup-top">
                        HOW TO PLAY
                    </div>
                    <div class="instructions-middle">
                        <div class="instructions">
                            <p>While trying to avoid the letters in red at the bottom, enter 4 five-letter words that use as many of the remaining letters of the alphabet as you can.</p>
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
                    <div class="instructions-footer">
                        A new AVOIDLE will be available each day!
                    </div>
                </div>
            </div>
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.2/rollups/aes.js"></script>
        <script type="text/javascript" src="js/avoidle.js?version=4"></script>
    </body>

    <footer></footer>
</html>
