                $("#form_area").change(function() {
                  var data = {
                    area_id: $(this).val()
                  };
                  alert(data[0])
                  $.ajax({
                      type: 'post',
                      url: '{{ path("select_ramas_ofertas") }}',
                      data: data,
                      success: function(data,url) {
                          var $rama_selector = $('#form_rama');

                          $rama_selector.html('<option value="' + data[0].toString() + '">' + data[1].toString() + '</option>');
                          for (var i = 2, total = data.length; i < total;) {
                              $rama_selector.append('<option value="' + data[i] + '">' + data[i+1] + '</option>');
                              i=i+2;
                          }
                          alert(data);

                      }
                  });
                });
                $("#form_rama").change(function() {
                var data = {
                  rama_id: $(this).val()
                };
                alert(data[0])
                $.ajax({
                  type: 'post',
                  url: '{{ path("select_disciplinas_ofertas") }}',
                  data: data,
                  success: function(data,url) {
                      var $rama_selector = $('#form_disciplina');
                      alert(data);

                      $rama_selector.html('<option value="' + data[0].toString() + '">' + data[1].toString() + '</option>');
                      for (var i = 2, total = data.length; i < total;) {
                          $rama_selector.append('<option value="' + data[i] + '">' + data[i+1] + '</option>');
                          i=i+2;
                      }
                  }
                });
              });
