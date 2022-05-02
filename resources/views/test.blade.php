<div id="hoge">読み込み中</div><button>再読込</button>
<script>
  function getList() {
    document.querySelector('#hoge').innerHTML = '読み込み中';
    setTimeout(function() {
      fetch('/index', {})
      .then((response) => {
          if (!response.ok) {
              throw new Error();
          }
          return response.json();
      })
      .then((json) => {
        let list = '<ul>';
        for (let i in json.dictionaries) {
          let dictionary = json.dictionaries[i];
          list += `<li>${dictionary.title}</li>`;
        }
        list += '</ul>';
        console.log(list)
        document.querySelector('#hoge').innerHTML = list;
      })
      .catch((reason) => {
      });
    }, 2000);
  }

  document.querySelector('button').onclick = getList;
  getList();
</script>
