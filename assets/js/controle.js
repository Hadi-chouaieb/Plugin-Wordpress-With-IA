function start_loder(id){
    document.getElementById('overlay').style.display = 'block';
    document.getElementById('popup').style.display = 'block';

    
    buttons=document.getElementsByClassName("btn")
    for (var i = 0; i < buttons.length; i++) {
        buttons[i].classList.add("disabled");
    }
    
    
    
    setTimeout(()=>{
        for (var i = 0; i < buttons.length; i++) {
            buttons[i].classList.remove("disabled");
            document.getElementById('overlay').style.display = 'none';
            document.getElementById('popup').style.display = 'none';
        }

    },4000)
}

function start_(){
    


    document.getElementById("titelPrompt").value='Write a title for an article about "{TOPIC}" in {LANGUAGE}. Style: {WRITING_STYLE}. Tone: {WRITING_TONE}. Must be between 40 and 60 characters'
    document.getElementById("sectionPrompt").value='Write {SECTIONS_COUNT} consecutive headings for an article about "{TITLE}", in {LANGUAGE}. Style: {WRITING_STYLE}. Tone: {WRITING_TONE}. Each heading is between 40 and 60 characters. Use Markdown for the headings (## ).'
    document.getElementById("contentPrompt").value='Write {PARAGRAPHS_PER_SECTION} paragraphs per heading. Use Markdown for formatting. Add an introduction prefixed by "===INTRO: ", and a conclusion prefixed by "===OUTRO: ". Style: {WRITING_STYLE}. Tone: {WRITING_TONE}.'
    document.getElementById("excerptPrompt").value='Write {PARAGRAPHS_PER_SECTION} paragraphs per heading. Use Markdown for formatting. Add an introduction prefixed by "===INTRO: ", and a conclusion prefixed by "===OUTRO: ". Style: {WRITING_STYLE}. Tone: {WRITING_TONE}.'

}

start_()