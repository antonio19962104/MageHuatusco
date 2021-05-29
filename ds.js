vm.getRespuestasEnfoqueArea = function () {
                vm.data = [];
                try{
                    var inputVisibleEA = $(".EA").find("input:radio:visible");
                var selectVisible = $("body").find("select:visible");
                var textareaVisible = $("body").find("textarea:visible");
                var names = Enumerable.From(inputVisibleEA).Distinct('$.name').OrderBy('$.name').ToArray();
                for (var i = 0; i < selectVisible.length; i++) {
                    names.push(selectVisible[i]);
                }
                for (var i = 0; i < textareaVisible.length; i++) {
                    names.push(textareaVisible[i]);
                }
                if (!vm.validarForm(names)) {
                    swal.fire("Debes responder a todos los reactivos", "", "info").then(function () {
                        return false;
                    });
                }
                else {
                    names.forEach(function (value, index, arr) {
                        vm.modelRespuesta = JSON.parse(JSON.stringify(objEmpleadoRes)); // inicializar objeto
                            if (names[index].type == "radio") {
                        var respuesta = $("input:radio[name=" + names[index].name + "]:checked").val();
                        vm.modelRespuesta = {
                            RespuestaEmpleado: respuesta,
                                    Preguntas: { IdPregunta: names[index].attributes.idPregunta.value, IdEnfoque: 1 },
                                    Respuestas: { IdRespuesta: names[index].name.split("-")[2] },
                                    Empleado: { IdEmpleado: localStorage.getItem("idEmpleado") },
                                    Encuesta: { IdEncuesta: localStorage.getItem("idEncuesta") },
                                    IdEnfoque: 2
                        };
                            }
                            if (names[index].type == "select-one" || names[index].type == "textarea") {
                                var respuesta = names[index].value;
                                vm.modelRespuesta = {
                                    RespuestaEmpleado: respuesta,
                                    Preguntas: { IdPregunta: names[index].attributes.idPregunta, IdEnfoque: 1 },
                                    Respuestas: { IdRespuesta: names[index].attributes.idPregunta },
                                    Empleado: { IdEmpleado: localStorage.getItem("idEmpleado") },
                                    Encuesta: { IdEncuesta: localStorage.getItem("idEncuesta") },
                                    IdEnfoque: 1
                                };
                            }
                        vm.data.push(vm.modelRespuesta);
                    });
                    return vm.data;
                }
                } catch (aE) {
                    console.log(aE);
                }
            }