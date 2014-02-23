<?php
	 $displayContent="content_default";
	 if(isset($_GET['e'])) { $displayContent=addslashes(strip_tags($_GET['e'])); }
?>
<table border="0" cellpadding="0" cellspacing="0" width="100%" height="100%">
	<tr>
    	<td class="text-content-heading">
        	Events
        </td>
    </tr>
    <tr>
    	<td align="left">
        	<table border="0" cellpadding="2" cellspacing="2" width="100%">
            	<tr>
                	<td width="170px" align="left" valign="top">
                    	<!-- MENU -->
                         <div id="slidedown_menu">
                            <ul>
                                <li><a href="#"><span class="text-body-link" onclick="jclt_event_changeTo('sur_saptak','Sur Saptak');">Sur Saptak</span></a></li>
                                <li><a href="#"><span class="text-body-link" onclick="jclt_event_changeTo('step_up','Step Up');">Step Up</span></a></li>
                                <li><a href="#"><span class="text-body-link" onclick="jclt_event_changeTo('pen_ur_mind','Pen Ur Mind');">Pen Ur Mind</span></a></li>
                                <li><a href="#"><span class="text-body-link" onclick="jclt_event_changeTo('telepathy','Telepathy');">Telepathy</span></a></li>
                                <li><a href="#"><span class="text-body-link" onclick="jclt_event_changeTo('freedom_of_speech','Freedom Of Speech');">Freedom Of Speech</span></a></li>
                                <li><a href="#"><span class="text-body-link" onclick="jclt_event_changeTo('sansani','Sansani');">Sansani</span></a></li>
                                <li><a href="#"><span class="text-body-link" onclick="jclt_event_changeTo('dotmp3','.MP3');">.MP3</span></a></li>
                                <li><a href="#"><span class="text-body-link" onclick="jclt_event_changeTo('nautanki','Nautanki');">Nautanki</span></a></li>
                                <li><a href="#"><span class="text-body-link" onclick="jclt_event_changeTo('spy_c','Spy C');">Spy C</span></a></li>
                                <li><a href="#"><span class="text-body-link" onclick="jclt_event_changeTo('aamne_saamne','Aamne Saamne');">Aamne Saamne</span></a></li>
                                <li><a href="#"><span class="text-body-link" onclick="jclt_event_changeTo('isharae_daogo_shara','Isharae Daogo Shara');">Isharae Daogo Shara</span></a></li>
                                <li><a href="#"><span class="text-body-link" onclick="jclt_event_changeTo('mogambo_khush_hua','Mogambo Khush Hua');">Mogambo Khush Hua</span></a></li>
                                <li><a href="#"><span class="text-body-link" onclick="jclt_event_changeTo('sargam','Sargam');">Sargam</span></a></li>
                                <li><a href="#"><span class="text-body-link" onclick="jclt_event_changeTo('waka_waka','Waka-Waka');">Waka-Waka</span></a></li>
                                <li><a href="#"><span class="text-body-link" onclick="jclt_event_changeTo('mind_twister','Mind Twister');">Mind Twister</span></a></li>
                                <li><a href="#"><span class="text-body-link" onclick="jclt_event_changeTo('dimaag_ki_batti','Dimaag Ki Batti');">Dimaag Ki Batti</span></a></li>
                                <li><a href="#"><span class="text-body-link" onclick="jclt_event_changeTo('jolu_idol','Jolu Idol');">Jolu Idol</span></a></li>
                                <li><a href="#"><span class="text-body-link" onclick="jclt_event_changeTo('bumjle','Bumjle');">Bumjle</span></a></li>
                                <li><a href="#"><span class="text-body-link" onclick="jclt_event_changeTo('track_d_track','Track-D-Track');">Track-D-Track</span></a></li>
                                <li><a href="#"><span class="text-body-link" onclick="jclt_event_changeTo('on_air','On Air');">On Air</span></a></li>
                                <li><a href="#"><span class="text-body-link" onclick="jclt_event_changeTo('f_factor','F-Factor');">F-Factor</span></a></li>
                                <li><a href="#"><span class="text-body-link" onclick="jclt_event_changeTo('num_lock','Num Lock');">Num Lock</span></a></li>
                                <li><a href="#"><span class="text-body-link" onclick="jclt_event_changeTo('bakwaas_band_kar','Bakwaas Band Kar');">Bakwaas Band Kar</span></a></li>
                                <li><a href="#"><span class="text-body-link" onclick="jclt_event_changeTo('dead_or_alive','Dead Or Alive');">Dead Or Alive</span></a></li>
                                <li><a href="#"><span class="text-body-link" onclick="jclt_event_changeTo('beep_beep','Beep Beep');">Beep Beep</span></a></li>
                                <li><a href="#"><span class="text-body-link" onclick="jclt_event_changeTo('pentathlon','Pentathlon');">Pentathlon</span></a></li>
                                <li><a href="#"><span class="text-body-link" onclick="jclt_event_changeTo('scrib_a_tee','Scrib-A-Tee');">Scrib-A-Tee</span></a></li>
                                <li><a href="#"><span class="text-body-link" onclick="jclt_event_changeTo('band_it','Band-It');">Band-It</span></a></li>
                      		</ul>
                      	</div>
                        <script language="javascript" type="text/javascript">
							initSlideDownMenu();
						</script>
                    </td>
                    <td align="left" valign="top">
                    	<!-- CONTENT -->
                        <input type="hidden" id="lastDisplayedContent" value="<?php echo $displayContent; ?>" />
                        <div class="div-event-content" id="content_default" align="justify">
                             <b>Jeclat '11</b> in its Golden Jubilee edition <b>Irina</b>, brings out to you a wide array of <b>twenty-eight</b> different events for you to tempt your foray, 
                             which will make you compete, bringing it down to the wire and take the bull by its horns.                
                        </div>
                        <div class="div-event-content" id="sur_saptak" align="justify">
                            <span class="text-sub-heading">Sur Saptak<br /><span style="font-weight: normal">Rabindra Sangeet Competition</span></span><br /><br />
                            Music washes away from the soul the dust of everyday life. 
                            And, what better than Rabindra Sangeet can accomplish that. 
                            The melancholy of vocals echoes through the crowd as the connoisseur takes up the stage, grabbing all attention. 
                            And... and silence falls into a nadir but the spell that it casts, like a rainbow of melody, raises up and up to the zenith.
                            <br /><br />
                            <span class="text-sub-heading">Rules and Regulations</span>
                            <ol>
                                <li>Each contestant will be participating individually</li>
                                <li>Only stringed instrument or mouth-organ may be used while performance.</li>
                                <li>Lyrics has to be submitted at the judges desk during name registration.</li>
                                <li>Participant carrying lyrics while performance will be disqualified.</li>
                                <li>Performance will be judged upon accent,body language and audience response apart from technical factors.</li>
                                <li>Last decision will be made by the Judgement Panel.</li>
                            </ol>
                        </div>
                        <div class="div-event-content" id="step_up" align="justify">
                            <span class="text-sub-heading">Step Up<br /><span style="font-weight: normal">Solo Dance Competition</span></span><br /><br />
                      		Amidst the swirl-whirl lights and peppy music, lit up the evening with swaying crowd and foot-tapping all around. 
                            That's the way to go... Hit the floor, hop the crowd... and do the boogie.
                            <br /><br />
                            <span class="text-sub-heading">Rules and Regulations</span>
                            <ol>
                                <li>Each contestant will be participating individually.</li>
                                <li>The contestant has to submit the song to be played at the time of name registration.</li>
                                <li>The maximum performance will be of 4 minutes.</li>
                                <li>Judges decision will be the final decision.</li>
                            </ol>
                        </div>
                        <div class="div-event-content" id="pen_ur_mind" align="justify">
                            <span class="text-sub-heading">Pen Ur Mind<br /><span style="font-weight: normal">Creative Writing</span></span><br /><br />
                            "Pen is Mightier than Sword"<br /><br />
                            Words have enormous power. So much, so that they can potentially change anything in the environs of mankind. 
                            Unleash out the creativity in you. Let the words flow from your pen. Hold no bars, just lurch at it. This is a gala of finest penmanship.
                            <br /><br />
                            <span class="text-sub-heading">Rules and Regulations</span>
                            <ol>
                                <li>Individual Contestant.</li>
                                <li>Here the contestants can express their ideas for or against a give theme.</li>
                                <li>The theme for the contest will be declared on the spot.</li>
                                <li>The form of expression can be anything – stories, paragraphs, poems, dialogues etc.</li>
                                <li>Judgment will be based on the creativity, clarity of concept and style of writing (includes legibility, approach).</li>
                                <li>Negative marking for vulgarity and it may lead to disqualification as well.</li>
                                <li>Time limit will be allotted.</li>
                                <li>Last decision will be made by the Judgement Panel.</li>
                            </ol>
                        </div>
                        <div class="div-event-content" id="telepathy" align="justify">
                            <span class="text-sub-heading">Telepathy<br /><span style="font-weight: normal">Made for each other</span></span><br /><br />
    						Allow a free run to your power of telepathy. 
                            Even some slip-ups and blunders would make sense, but to make it up as a couple (boy to boy of course) and hit it in sync, it takes some beating.
                            <br /><br />
                            <span class="text-sub-heading">Rules and Regulations</span>
                            <ol>
                                <li>There will be 2 members in a team.</li>
                                <li>This event will be in two rounds,first Written Prelims and then Finals.</li>
                                <li>Team players will have to face the set of questions individually.</li>
                                <li>Winner will be selected on the number of matching answers.</li>
                                <li>Last decision will be made by the Judgement Panel.</li>
                            </ol>
                        </div>
                        <div class="div-event-content" id="freedom_of_speech" align="justify">
                            <span class="text-sub-heading">Freedom Of Speech<br /><span style="font-weight: normal">Mock Parliament</span></span><br /><br />
							This event is something of a nippy parliamentary session with the ruling party defending and proposing certain acts or laws and the 
                            opposition party members, as always, try to locate the flaws. A speaker will preside over the proceedings as it goes.
                            <br /><br />
                            <span class="text-sub-heading">Rules and Regulations</span>
                            <ol>
                                <li>Each applicant will be participating individually.</li>
                                <li>The usage of English is only permitted.</li>
                                <li>Prelims will be based on Group discussion.</li>
                                <li>10 participants will be selected for the finals.</li>
                                <li>There will be Ruling party and opposing party in the finals(5 each based on lottery).</li>
                                <li>There will be 3 rounds primarily-question hour, one new bill to be introduced by the ruling party and one existing bill to be opposed by the opposing party.</li>
                                <li>All questions, answers and speech will be addressed to the Speaker.</li>
                                <li>Last decision will be made by the Judgement Panel.</li>
                            </ol>
                        </div>
                        <div class="div-event-content" id="sansani" align="justify">
                            <span class="text-sub-heading">Sansani<br /><span style="font-weight: normal">Press Conference</span></span><br /><br />
							It's high time to think yourself as the greatest personality but it's always a tough time when you have to present yourself like themselves 
                            in front of media. The weaknesses, the strengths, the words and the plans which has to be defended are always difficult when a group of 
                            journalists trying to cut you in pieces. Face it and smartly come out with an impression that you deserve to be the personality you think.
                            <br /><br />
                            <span class="text-sub-heading">Rules and Regulations</span>
                            <ol>
                                <li>Each contestant will be participating individually.</li>
                                <li>A celebrity ‘s role will be assigned on the spot by the judges panel.</li>
                                <li>The usage of English,Hindi and Bengali are permitted.</li>
                                <li>Total time limit on stage for each contestant is 5 minutes.</li>
                                <li>Last decision will be made by the Judgement Panel.</li>
                            </ol>
                        </div>
                        <div class="div-event-content" id="dotmp3" align="justify">
                            <span class="text-sub-heading">.MP3<br /><span style="font-weight: normal">Western Solo Competition</span></span><br /><br />
							Heard melodies are sweet, but those unheard are sweeter. That jazzed vocal and that odd soft rock, all add up to the very essence of western music... live! 
                            <br /><br />
                            <span class="text-sub-heading">Rules and Regulations</span>
                            <ol>
                                <li>Each contestant will be participating individually.</li>
                                <li>Only stringed instrument or mouth-organ may be used while performance.</li>
                                <li>Lyrics has to be submitted at the judges desk during name registration.</li>
                                <li>Participant carrying lyrics while performance will be disqualified.</li>
                                <li>Performance will be judged upon accent,body language and audience response apart from technical factors.</li>
                                <li>Last decision will be made by the Judgement Panel.</li>
                            </ol>
                        </div>
                        <div class="div-event-content" id="nautanki" align="justify">
                            <span class="text-sub-heading">Nautanki<br /><span style="font-weight: normal">Spot Acting</span></span><br /><br />
							A true actor needs no time, needs no situation to simulate his thoughts and emotions of his character. 
                            Tap your inner actor on the spot and draw your emotions through the vocal intonation and facial expression to portray the given character.
                            <br /><br />
                            <span class="text-sub-heading">Rules and Regulations</span>
                            <ol>
                                <li>There will be 2 members in a team.</li>
                                <li>The acting will be according to the theme given.</li>
                                <li>Each team has a maximum of 5 minutes.</li>
                                <li>Vulgarity in play is not acceptable.</li>
                                <li>Personal indication to anybody or diversion from theme may lead to disqualification.</li>
                                <li>Last decision will be made by the Judgement Panel.</li>
                            </ol>
                        </div>
                        <div class="div-event-content" id="spy_c" align="justify">
                            <span class="text-sub-heading">Spy C<br /><span style="font-weight: normal">Programming Contest</span></span><br /><br />
							What is it that entices your mind, appealing to you like nothing else? A blinking cursor? A long-drawn-out C code? 
                            Or clattering of the keyboard? If you somewhere down there you feel 'YES', come here and get going! Show us your computing prowess!
                            <br /><br />
                            <span class="text-sub-heading">Rules and Regulations</span>
                            <ol>
                                <li>There will be 3 memebers in a team.</li>
                                <li>The teams will be selected for finals through a test in the prelims based on their knowledge in C and computers.</li>
                                <li>The teams selected for finals will have to solve the given programs either in C or Java.</li>
                                <li>Marks will be deducted or complex programs.</li>
                            </ol>
                        </div>
                        <div class="div-event-content" id="aamne_saamne" align="justify">
                            <span class="text-sub-heading">Aamne Saamne<br /><span style="font-weight: normal">Debate</span></span><br /><br />
							Debate on some recent hot topic, chosen from a plethora will make the best public speaker come to the podium and rule it, 
                            standing and speaking right there from his lectern.
                            <br /><br />
                            <span class="text-sub-heading">Rules and Regulations</span>
                            <ol>
                                <li>There will be 2 members in a team.</li>
                                <li>Both members of a team will speak either for or against the motion and this will be decided by lottery.</li>
                                <li>The teams will compete with each other in the prelims and it will based on knock out basis.(1:1)</li>
                                <li>Depending upon the response we will have three or more rounds.</li>
                                <li>We will have two teams in the finals.</li>
                                <li>Last decision will be made by the Judgement Panel.</li>
                            </ol>
                        </div>
                        <div class="div-event-content" id="isharae_daogo_shara" align="justify">
                            <span class="text-sub-heading">Isharae Daogo Shara<br /><span style="font-weight: normal">Jeclat Malle</span></span><br /><br />
							A fun activity where the team effort and proper understanding between team mates is required. 
                            A team member is just a dumb where he enacts a name, a character, a movie name or anything in front of his team 
                            without opening his mouth with just signals of his hands, and the team has to extract the given thing by just asking questions. 
                            This shows your skills, common sense, acting without speaking a word and understanding between your team mates.
                            <br /><br />
                            <span class="text-sub-heading">Rules and Regulations</span>
                            <ol>
                                <li>There will be 3 members in a team.</li>
                                <li>Any one in the team has to act upon a topic,which the other team-mates has to guess.</li>
                                <li>Total time limit on stage for each team’s acting and guessing  is 1 minute.</li>
                                <li>Lip movement,speaking or numbering may lead to disqualification.</li>
                                <li>Last decision will be made by the Judgement Panel.</li>
                            </ol>
                        </div>
                         <div class="div-event-content" id="mogambo_khush_hua" align="justify">
                            <span class="text-sub-heading">Mogambo Khush Hua<br /><span style="font-weight: normal">Laughter Challenge</span></span><br /><br />
							Can you tickle the funny bone? Do you strike it right enough to make people laugh? Mixing it with balanced proportion? If you do, then this is the place to be.
                            <br /><br />
                            <span class="text-sub-heading">Rules and Regulations</span>
                            <ol>
                                <li>Each contestant will be participating individually.</li>
                                <li>Vulgarity  may lead to disqualification.</li>
                                <li>Points will be awarded for creativity, humour, spontaneity and audience response.</li>
                                <li>Total time on stage for each contestant  is 5 minutes.</li>
                                <li>Last decision will be made by the Judgement Panel.</li>
                            </ol>
                        </div>
                         <div class="div-event-content" id="sargam" align="justify">
                            <span class="text-sub-heading">Sargam<br /><span style="font-weight: normal">Bengali Modern Solo Competition</span></span><br /><br />
							Bengali music is always close to our hearts. And, why not? This Being our mother tongue, remains to be out of the ordinary and uniquely exclusive.
                            <br /><br />
                            <span class="text-sub-heading">Rules and Regulations</span>
                            <ol>
                                <li>Each contestant will be participating individually.</li>
                                <li>Only stringed instrument or mouth-organ may be used while performance.</li>
                                <li>Lyrics has to be submitted at the judges desk during name registration.</li>
                                <li>Participant carrying lyrics while performance will be disqualified.</li>
                                <li>Performance will be judged upon accent,body language and audience response apart from technical factors.</li>
                                <li>Last decision will be made by the Judgement Panel.</li>
                            </ol>
                        </div>
                         <div class="div-event-content" id="waka_waka" align="justify">
                            <span class="text-sub-heading">Waka-Waka<br /><span style="font-weight: normal">Spot Dancing</span></span><br /><br />
							Dancing with prior rehearsal and tuning is a tad easier but when it comes to make it all on the spot; challenges are thwarted. 
                            Improvising and keeping the boogie bustling... shake-a-bon-bon!
                            <br /><br />
                            <span class="text-sub-heading">Rules and Regulations</span>
                            <ol>
                                <li>There will be 2 members in a team.</li>
                                <li>Total time limit on stage for each team  is 3  minutes.</li>
                                <li>Judgement will be made on expression, creativity, synchronizing and chemistry.</li>
                                <li>Vulgarity will not be entertained.</li>
                                <li>Last decision will be made by the Judgement Panel.</li>
                            </ol>
                        </div>
                         <div class="div-event-content" id="mind_twister" align="justify">
                            <span class="text-sub-heading">Mind Twister<br /><span style="font-weight: normal">Puzzles</span></span><br /><br />
							Your minds will be set on fire, bombarded by some of the toughest puzzles that you might have ever come across. 
                            Mind wrenching and thought twisting is written all over it. So, just drop in; test your grey matter here. 
                            <br /><br />
                            <span class="text-sub-heading">Rules and Regulations</span>
                            <ol>
                                <li>Each contestant will be participating individually.</li>
                                <li>The contestant has to write their answers in the sheets provided by the jeclat committee.</li>
                                <li>There will be marks for approaching the problems correctly (step marking).</li>
                                <li>Last decision will be made by the Judgement Panel.</li>
                            </ol>
                        </div>
                         <div class="div-event-content" id="dimaag_ki_batti" align="justify">
                            <span class="text-sub-heading">Dimaag Ki Batti<br /><span style="font-weight: normal">Quiz</span></span><br /><br />
							An enrichment activity for gifted and talented students. Apart from your bookish knowledge, one should be well informed of his surroundings, 
                            current affairs, history, technical activities and so on. It's high time to grab your opportunity to prove that you are not a dumb who just 
                            sits by his own side without having proper knowledge of what is going in this world.
                            <br /><br />
                            <span class="text-sub-heading">Rules and Regulations</span>
                            <ol>
                                <li>Teams can have a maximum of 2 participants.</li>
                                <li>The quiz consists of two rounds - prelims and final.</li>
                                <li>The top six teams will enter the final round.</li>
                                <li>Teams have to qualify in the written elimination to move to final round.</li>
                                <li>In case of any controversy, the quizmaster reserves all rights to make decisions.</li>
                            </ol>
                        </div>
                         <div class="div-event-content" id="jolu_idol" align="justify">
                            <span class="text-sub-heading">Jolu Idol<br /><span style="font-weight: normal">Hindi Solo Contest</span></span><br /><br />
							The most popular and sought after event of the fest. And, winning this comprehensively might just make you an overnight celebrity in the campus.
                            <br /><br />
                            <span class="text-sub-heading">Rules and Regulations</span>
                            <ol>
                                <li>Each contestant will be participating individually</li>
                                <li>Only stringed instrument or mouth-organ may be used while performance.</li>
                                <li>Lyrics has to be submitted at the judges desk during name registration.</li>
                                <li>Participant carrying lyrics while performance will be disqualified.</li>
                                <li>Performance will be judged upon accent,body language and audience response apart from technical factors.</li>
                                <li>Last decision will be made by the Judgement Panel.</li>
                            </ol>
                        </div>
                         <div class="div-event-content" id="bumjle" align="justify">
                            <span class="text-sub-heading">BUMJLE<br /><span style="font-weight: normal">Word Games</span></span><br /><br />
							The skewed up vocabulary game.
                            <br /><br />
                            <span class="text-sub-heading">Rules and Regulations</span>
                            <ol>
                                <li>There will be 2 members in a team.</li>
                                <li>Word game consists of two rounds-prelims and finals.</li>
                                <li>Only top six teams will enter the finals.</li>
                                <li>Last decision will be made by the Judgement Panel.</li>
                            </ol>
                        </div>
                         <div class="div-event-content" id="track_d_track" align="justify">
                            <span class="text-sub-heading">Track-D-Track<br /><span style="font-weight: normal">Antakshari</span></span><br /><br />
							 Antakshari; the age old spoken parlor game is all frolic. Light and zippy in execution, it stands apart for its assortment rather than the melody.
                             <br /><br />
                            <span class="text-sub-heading">Rules and Regulations</span>
                            <ol>
                                <li>There will be 2 members in a team.</li>
                                <li>No song can be repeated in any round.</li>
                                <li>Prelims and finals will be conducted.</li>
                                <li>The elimination rule: In case a team sings a song incorrectly, or is unable to complete the 'mukhra', or forgets a word of the song etc., the remaining teams can raise an objection to it and if the objector sings the correct song then the pointed team is eliminated.</li>
                                <li>Only six teams will enter final round.</li>
                                <li>Judges decision will be the last decision.</li>
                            </ol>
                        </div>
                        <div class="div-event-content" id="on_air" align="justify">
                            <span class="text-sub-heading">On Air<br /><span style="font-weight: normal">RJ Hunt</span></span><br /><br />
							The latest addition to the Jolu folklore, keeping pace with time. Show your fluency and skills that you have got to make it big.
                            <br /><br />
                            <span class="text-sub-heading">Rules and Regulations</span>
                            <ol>
                                <li>Individual participation.</li>
                                <li>Topic will be given 5 minutes ahead of performance.</li>
                                <li>Marks will be given on elocution,expression,way of relating to audience.</li>
                                <li>Judges decision will be the final decision.</li>
                            </ol>
                        </div>
                        <div class="div-event-content" id="num_lock" align="justify">
                            <span class="text-sub-heading">Num Lock<br /><span style="font-weight: normal">Sudoku Contest</span></span><br /><br />
							Do you love to play with numbers?  Are you sharp enough to think fast? If yes, so fill the 9x9 grid as soon as possible and prove your supremacy.
                            <br /><br />
                            <span class="text-sub-heading">Rules and Regulations</span>
                            <ol>
                                <li>Each contestant will be participating individually.</li>
          						<li>Winners will be declared on the basis of completion of the Sudoku.</li>
                            </ol>
                        </div>
                        <div class="div-event-content" id="dead_or_alive" align="justify">
                            <span class="text-sub-heading">Dead Or Alive<br /><span style="font-weight: normal">Gaming Contest</span></span><br /><br />
							The geeks with the gizmos, get set to go! If gaming is your forte then jump in and hit the virtual battlefield.
                            
                        </div>
                        <div class="div-event-content" id="bakwaas_band_kar" align="justify">
                            <span class="text-sub-heading">Bakwaas Band Kar<br /><span style="font-weight: normal">Fully Faltoo</span></span><br /><br />
							How much foolish can you be? Fools make fool of themselves. But in this event you are considered to be fool if your judgments are 
                            considered to be prudent and sound, without reliance on esoteric knowledge or study or research. Apply your foolish skills with your 
                            sound judgment in practical matters to be a fully faltoo.
                            <br /><br />
                            <span class="text-sub-heading">Rules and Regulations</span>
                            <ol>
                                <li>There will be 2 members in a team.</li>
                                <li>Teams has to clear written prelims round.</li>
                                <li>Only 6 teams will be entering the finals.</li>
                                <li>Last decision will be made by the Judgement Panel.</li>
                            </ol>
                        </div>
                        <div class="div-event-content" id="f_factor" align="justify">
                            <span class="text-sub-heading">F-Factor<br /><span style="font-weight: normal">Fashion Parade</span></span><br /><br />
							The Oohlala of Jolu. Time to make the ramp sizzle with some grace. Show your fashion, pomp and panache. 
                            <br /><br />
                            <span class="text-sub-heading">Rules and Regulations</span>
                            <ol>
                                <li>Every team should have a theme.</li>
                                <li>The team should consist of 4 members.</li>
                                <li>Total time limit on stage for each team  is 5 minutes.</li>
                                <li>Last decision will be made by the Judgement Panel.</li>
                            </ol>
                        </div>
                        <div class="div-event-content" id="beep_beep" align="justify">
                            <span class="text-sub-heading">Beep Beep<br /><span style="font-weight: normal">SMS Contest</span></span><br /><br />
							Not so good with creative and serious writing, but almost text SMSs at will? This is where you should be!
                             <br /><br />
                            <span class="text-sub-heading">Rules and Regulations</span>
                            <ol>
                                <li>Each contestant will be participating individually.</li>
                                <li>Total time limit is 15 minutes.</li>
                                <li>The topics of sms will be disclosed on the spot.</li>
                                <li>SMS  must be original.</li>
                                <li>Judges decision will be the final decision.</li>
                            </ol>
                        </div>
                        <div class="div-event-content" id="pentathlon" align="justify">
                            <span class="text-sub-heading">Pentathlon<br /><span style="font-weight: normal"></span></span><br /><br />
							The five hurdles, the five tasks to show the supremacy. These events test the skills in different fields. 
                            A song sung by a given word, extempore, a debate, picturesque a given hint and an advertisement of a particular object. 
                            Intelligence with a li'l mixture of confidence will cut the way through.
                             <br /><br />
                            <span class="text-sub-heading">Rules and Regulations</span>
                            <ol>
                                <li>Each contestant will be participating individually.</li>
                                <li>There will be five hurdles which a contestant has to face.</li>
                                <li>Judges decision will be the final decision.</li>
                            </ol>
                        </div>
                        <div class="div-event-content" id="scrib_a_tee" align="justify">
                            <span class="text-sub-heading">Scrib-A-Tee<br /><span style="font-weight: normal">T-Shirt Designing Contest</span></span><br /><br />
							Make the T-shirt your canvas and paint your imagination onto it. 
                        </div>
                        <?php 
							$ref_message='';
							if(isset($_GET['ref']))
							{
								switch (strtolower(addslashes(strip_tags($_GET['ref']))))
								{
									case 'banditsqlerror':
										$ref_message='Band-It registration unsuccessful due to technical failure. Sorry for the inconvinience. Please try again later.';
									break;
									case 'banditincomplete':
										$ref_message='One or more fields entry. Please provide all the necessary details.';
									break;
									case 'banditsuccess':
										$ref_message='Band-It registration successful.';
									break;
									default:
								}
							}
							if($ref_message!="")
							{
								echo '<table style="color: #990000; z-index: 1000; background: #FFBBAA; position: absolute; top: 10px; left: 10px; border: medium solid #990000" cellpadding="2" cellspacing="2">';
								echo '<tr><td align="center"><b>Band-It registration: </b> '. $ref_message . ' | <a href="?"><b>Close</b></a></td></tr></table>';
							}
						?>
                        <div class="div-event-content" id="band_it" align="justify">
                            <span class="text-sub-heading">Band-It<br /><span style="font-weight: normal">Band Blast</span></span><br /><br />
							The band contest, is the real rock-a-mania! With many participating bands, it's a treat to watch them perform at peak.
                            <br /><br />
                            <ul class="panelist">
                                <li>Entry fee per band is INR 800 which will be taken on the first day of event.</li>                                
                                <li>Bands may contain a maximum of 6 members.</li>
                                <li>A total of 30 minutes will be given to each band for performing 4 songs including sound check.</li>
                                <li>Four songs including one original composition and one english song has to be performed.</li>
                                <li>The lyrics to the self composed song must be submitted earlier for approval.</li>
                                <li>Instuments other than drums will not be provided.</li>
                                <li>Judges decision will be the final decision.</li>
                                <li>Any kind of damage to the drums has to be paid for.</li>
                            </ul>
                            <br />
                            The First prize is INR 7000, Second prize INR 4000 and the Third prize INR 2000. 
                            There will also be distinct recognition for best original song composition, best guitarist, vocalist and best drummer.
                            <br /><br />
                            <hr noshade="noshade" color="#666666" width="100%" size="1px" />
                            <form method="post" action="jclt-event-register-bandit.php">
                            <table border="0" cellpadding="2" cellspacing="2" width="100%">
                                <tr valign="top"><td colspan="2"><b>Register For Band-It</b></td></tr>
                                <tr valign="top"><td width="200px">Band Name</td><td><input class="form-items" type="text" name="bandname" maxlength="256" style="width: 400px" /></td></tr>
                                <tr valign="top"><td>Place From</td><td><input class="form-items" type="text" name="placefrom" maxlength="1024" style="width: 400px" /></td></tr>
                                <tr valign="top"><td>Number of Members</td><td><select name="members" class="form-items"><?php for($y=6;$y>=2;$y--) { echo '<option>' . $y . '</option>'; } ?></select></td></tr>
                                <tr valign="top"><td>Band Reperesentative's Name</td><td><input class="form-items" type="text" name="representativename" maxlength="256" style="width: 400px" /></td></tr>
                                <tr valign="top"><td>Contact Number</td><td><input class="form-items" type="text" name="contact" maxlength="15" style="width: 400px" /></td></tr>
                                <tr valign="top"><td>&nbsp;</td><td><input class="form-items-submit" type="submit" name="submit" value="Register For Band-It" />&nbsp;<input class="form-items-submit" type="reset" name="submit" value="Clear" /></td></tr>
                            </table>
                            </form>
                        </div>
                        <!-- END of EVENTS -->
						<script language="javascript" type="text/javascript">
                            initContentDisplay();
                        </script>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
