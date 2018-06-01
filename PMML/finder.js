var GSScurl = "https://spreadsheets.google.com/feeds/cells/14pDCMfhYCyTRfsl_RaWa-_viDwsNpGyLSRhHFMH3R1s/1/public/basic?alt=json-in-script&min-row=1&min-col=1&callback=?";
var entry;

$.getJSON(GSScurl,function(data){
  entry=data.feed.entry;
  //구글 스프레드 시트의 모든 내용은 feed.entry에 담겨있습니다.			
});

var example2 = new Vue({
  el: '#app',
  data: {
    name: '이름',
    stuID: '학번',
    dday: '남은날',
    inday: '입대일',
    outday: '전역일',
    regiment: '소속',
    assignment: '보직'
    
  },
  // 메소드는 `methods` 객체 안에 정의합니다
  methods: {
    updateValue: function (value) {
      var name2 = document.getElementById("name1").value;
      this.name = name2;
      
      for(var i in entry){ // 각 행에대해 아래 스크립트를 실행합니다.
        if(entry[i].content.$t == name2){
          var in1 = i;
          in1++;
          this.stuID = entry[in1].content.$t;
          in1++;
          this.dday = entry[in1].content.$t;
          in1++;
          this.inday = entry[in1].content.$t;
          in1++;
          this.outday = entry[in1].content.$t;
          in1++;
          this.regiment = entry[in1].content.$t;
          in1++;
          this.assignment = entry[in1].content.$t;
        }
      }
    }
  }
});