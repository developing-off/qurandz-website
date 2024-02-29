<?php
$url = "https://api.quran.com/api/v4/resources/recitations";
$json = file_get_contents($url);
$reciters_data = json_decode($json, TRUE);
foreach ($reciters_data['recitations'] as $reciter) {
    $reciter_name = $reciter['reciter_name'];
}

function trad_reciters($reciter_name)
{
    if ($reciter_name === 'Khalifah Taniji') {
        echo 'خليفة الطنيجي';
    }
    elseif ($reciter_name === 'Abdur-Rahman as-Sudais') {
        echo 'عبد الرحمن السديس';
    }
    elseif ($reciter_name === 'Sa`ud ash-Shuraym') {
        echo 'سعود الشريم';
    }
    elseif ($reciter_name === 'Mahmoud Khaleel Al-Husary') {
        echo 'محمود خليل الحصري';
    }
    elseif ($reciter_name === 'Abdul Basit Abdul Samad') {
        echo 'عبد الباسط عبد الصمد';
    }
    elseif ($reciter_name === 'Mishari Rashid al-`Afasy') {
        echo 'مشاري راشد العفاسي';
    }
    elseif ($reciter_name === 'Abu Bakr al-Shatri') {
        echo 'أبو بكر الشطري';
    }
    elseif ($reciter_name === 'Muhammad Siddiq al-Minshawi') {
        echo 'محمد صديق المنشاوي';
    }
    elseif ($reciter_name === 'Hani ar-Rifai') {
        echo 'هاني الرفاعي';
    }
    elseif ($reciter_name === 'Mahmoud Khalil Al-Husary') {
        echo 'محمود خليل الحصري';
    }
    elseif ($reciter_name === 'Muhammad Siddiq al-Minshawi(with kids)') {
        echo 'محمد صديق المنشاوي';
    }
    elseif ($reciter_name === 'Abdullah Basfar') {
        echo 'عبد الله بصفر';
    }
    elseif ($reciter_name === 'Abdullah Matrood') {
        echo 'عبد الله مطرود';
    }
    elseif ($reciter_name === 'AbdulMuhsin al-Qasim') {
        echo 'عبد المحسن القاسم';
    }
    elseif ($reciter_name === 'AbdulWadood Haneef') {
        echo 'عبد الودود حنيف';
    }
    elseif ($reciter_name === 'Abu Bakr Ash-Shaatree') {
        echo 'أبو بكر الشاطري';
    }
    elseif ($reciter_name === 'Ahmed ibn Ali al-Ajamy') {
        echo 'أحمد بن علي العجمي';
    }
    elseif ($reciter_name === 'Ahmed Neana') {
        echo 'أحمد نعينع';
    }
    elseif ($reciter_name === 'Alafasy') {
        echo 'العفاسي';
    }
    elseif ($reciter_name === 'Ali al-Huthaify') {
        echo 'علي الحذيفي';
    }
    elseif ($reciter_name === 'Ali Hajjaj Alsouasi') {
        echo 'علي حجاج السويسي';
    }
    elseif ($reciter_name === 'Aziz Alili') {
        echo 'عزيز علي';
    }
    elseif ($reciter_name === 'Fares Abbad') {
        echo 'فارس عباد';
    }
    elseif ($reciter_name === 'Hani Ar Rifai') {
        echo 'هاني الرفاعي';
    }
    elseif ($reciter_name === 'Ibrahim Al Akhdar') {
        echo 'إبراهيم الأخضر';
    }
    elseif ($reciter_name === 'Khalid Abdulkafi') {
        echo 'خالد عبد الكافي';
    }
    elseif ($reciter_name === 'Maher Al Mueaqly') {
        echo 'ماهر المعيقلي';
    }else{
        echo $reciter_name;
    
    }
}

?>
<section id="quran" class="section bg-brand-1 mt-10">
    <div class="container">
        <div class="row mt-50">
            <?php
            if($reciter_name){

           
            $i = 0;
            foreach ($reciters_data['recitations'] as $reciter) {
                ?>
                <div class="col-lg-3 col-md-6 col-sm-6 ">
                    <div class="card-offer hover-up">
                        <div class="card-info">
                            <h4 class="color-brand-2 mb-5" style="font-size: 18px;">القارئ:
                                <?php trad_reciters($reciter['reciter_name']); ?>
                            </h4>
                            <p class="font-md color-white mb-5">قراءة:
                                <?php if ($reciter['style'] === "Hafs") {
                                    echo 'حفص';
                                }else{
                                    echo $reciter['style'];
                                } 
                                ?>
                            </p>
                            <div class="box-button-offer">
                                <?php
                                $url_reciter_audio = "https://api.quran.com/api/v4/chapter_recitations/" . $reciter['id'] . "/$id";
                                $json = file_get_contents($url_reciter_audio);
                                $reciters_audio = json_decode($json, TRUE);
                                ?>
                                
                                <audio id="audioPlayer<?= $i ?>"
                                    src="<?= $reciters_audio['audio_file']['audio_url'] ?>"></audio>
                                <button id="playPauseButton<?= $i ?>"
                                    class="btn btn-default font-sm-bold pl-0 color-brand-2"> <i style="font-size: 30px;"
                                        class="fa-solid fa-play"></i>
                                </button>
                                <a download="<?= $reciters_audio['audio_file']['audio_url'] ?>" href="<?= $reciters_audio['audio_file']['audio_url'] ?>">
                                <button 
                                    class="btn btn-default font-sm-bold pl-0 color-white"> <i style="font-size: 20px;"
                                        class="fa-solid fa-download"></i>
                                </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                $i++;
            }
        }else{
            echo "error loading reciters";
        }
            ?>
        </div>
    </div>
</section>
<script>
    var audioPlayers = [], playPauseButtons = [], progressBars = [];
for(var i = 0; i < 12; i++) {
    
    audioPlayers.push(document.getElementById("audioPlayer" + i));
    playPauseButtons.push(document.getElementById("playPauseButton" + i));
    progressBars.push(document.createElement("div"));
    progressBars[i].id = "progressBar" + i;
    progressBars[i].style.width = "0%";
    progressBars[i].style.height = "4px";
    progressBars[i].style.backgroundColor = "gray";
    progressBars[i].style.position = "relative";
    progressBars[i].style.top = "-4px";
    progressBars[i].style.direction = "ltr";
    audioPlayers[i].parentNode.insertBefore(progressBars[i], audioPlayers[i].nextSibling);
}
for(var i = 0; i < playPauseButtons.length; i++) {
    if(playPauseButtons[i]) {
        playPauseButtons[i].addEventListener("click", function (i) {
            return function () {
                if(audioPlayers[i].paused) {
                    audioPlayers[i].play();
                    for(var j = 0; j < audioPlayers.length; j++) {
                        if(j !== i && !audioPlayers[j].paused) {
                            audioPlayers[j].pause();
                            playPauseButtons[j].innerHTML = "<i style='font-size: 30px;' class='fa-solid fa-play'></i>";
                        }
                    }
                    playPauseButtons[i].innerHTML = "<i style='font-size: 30px;' class='fa-solid fa-pause'></i>";
                } else {
                    audioPlayers[i].pause();
                    playPauseButtons[i].innerHTML = "<i style='font-size: 30px;' class='fa-solid fa-play'></i>";
                }
            }
        }(i));
        
        audioPlayers[i].addEventListener("timeupdate", function(i) {
            return function() {
                var progressBar = document.getElementById("progressBar" + i);
                if(progressBar) {
                    var percent = (audioPlayers[i].currentTime / audioPlayers[i].duration) * 100;
                    progressBar.style.width = percent + "%";
                }
            }
        }(i));
    }
}

</script>