  function LongestWord(sen) { 
      var arr = sen.split(' ');
      var largest = "";
      arr.forEach(function(item){
          if(item.length > largest.length){
              largest = item;
          }
      },this);
    // code goes here  
    return largest; 

  }

  // keep this function call here 
  LongestWord(readline());
