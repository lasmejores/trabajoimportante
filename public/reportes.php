
<!DOCTYPE >

<html xmlns="" >


    
<body id="form1">
<form name="form1" method="post" action="datareportes.php"  id="form1">
<a href="principal-vista.php">Pagina de inicio</a>
 <div id="contenido">
 <div>           
 <div style="text-align:center;">
            
               
<table width="97%"  style="margin: 0 auto;background-color:red;" border="0">

 <tr style="text-align:left">

 <th style="vertical-align: top; background-color: red; text-align: left" class="style2" align="left">Gestion</th>

 <th align="left" class="style5">



<select name= gestion  id= gestion  class="form-control">
	<option value="2019"> 2019</option>
	<option value="2018"> 2018</option>
	<option value="2017"> 2017</option>
	<option value="2016"> 2016</option>
	<option selected="selected" value="2015"> 2015</option>
	<option value="2014"> 2014</option>
	<option value="2013"> 2013</option>
	<option value="2012"> 2012</option>
	<option value="2011"> 2011</option>
	<option value="2010"> 2010</option>
</select>
                    



                          
</th>
                   
</tr>

<tr style="text-align:left">

<th style="vertical-align: top; background-color: red; text-align: left" class="style2" align="left">Reporte</th>

 <th align="left" class="style5">


<select name="LSTFormulario" onchange="javascript:setTimeout('__doPostBack(\'LSTFormulario\',\'\')', 0)" id="LSTFormulario" class="">

<option value="A"> tuberculosis </option>
<option selected="selected" value="B"> vacuna pentavalente </option>
<option selected="selected" value="C"> vacuna pentavalente1 </option>


</select> 
  </th>
 <th></th>
 </tr>

 <td style="vertical-align: top; height: 26px; background-color: red; text-align: left; width: 279px;">

 <span style="color: black"><span style="font-size: 8pt">Variables</span><br />

</span>&nbsp;<span style="color:Red;font-family:Verdana;font-size:7pt;"><input id="MainContent_WebPanel2_Cod_subvar" type="checkbox" name="ctl00$MainContent$WebPanel2$Cod_subvar" onclick="javascript:setTimeout(&#39;__doPostBack(\&#39;ctl00$MainContent$WebPanel2$Cod_subvar\&#39;,\&#39;\&#39;)&#39;, 0)" /><label for="MainContent_WebPanel2_Cod_subvar">todas las variables</label></span></td>

<td style="vertical-align: top; height: 26px; background-color: red; text-align: left">



 <select size="3" name="ctl00$MainContent$WebPanel2$list_subvariable" multiple="multiple" onchange="javascript:setTimeout(&#39;__doPostBack(\&#39;ctl00$MainContent$WebPanel2$list_subvariable\&#39;,\&#39;\&#39;)&#39;, 0)" id="MainContent_WebPanel2_list_subvariable" style="color:Black;background-color:White;font-family:Verdana;font-size:7pt;">
		<option value="01"> Menores de 5 a&#241;os                </option>
		<option value="10"> Personas de 10 a 20 a&#241;os               </option>
		<option selected="selected" value="11"> Personas de 21 a 59 a&#241;os         </option>
		<option value="09"> Personas de 5 a 9 a&#241;os                    </option>
		<option value="08"> Personas de 60 a&#241;os y m&#225;s                </option>
</select>

<select size="4" name="ctl00$MainContent$WebPanel2$ListBox1" id="MainContent_WebPanel2_ListBox1" style="height:1px;width:1px;">
<option value="301011101"> Personas de 21 a 59 a&#241;os            </option>
<option value="301011102"> Personas de 21 a 59 a&#241;os         </option>

	</select></td>

 <tr style="text-align:left">
 <th style="vertical-align: top; background-color: red; text-align: left" class="style2" align="left">Base de Datos</th>

<th align="left" class="style5">


<select name="DDLGrupo" onchange="javascript:setTimeout('__doPostBack(\'DDLGrupo\',\'\')', 0)" id="DDLGrupo" class="Azul">
	<option value="0">Seleccione la opci&#243;n</option>
	<option value="3"></option>
	<option selected="selected" value="1"></option>
	<option value="2"></option>
</select>


  <span id="RGrupo" style="color:Red;visibility:hidden;">Es necesario seleccionar producto</span>
                    
 </th>
 
</tr>
 

</tr>

 </th>
 <th>&nbsp;</th>
 </tr>                   
 </table>


<select size="4" name="ctl00$MainContent$WebPanel2$ListBox1" id="MainContent_WebPanel2_ListBox1" style="height:1px;width:1px;">
<option value="301011101"> Personas de 21 a 59 a&#241;os                            </option>
<option value="301011102"> Personas de 21 a 59 a&#241;os                            </option>
</select>

</td>


 <table width="97%" style="margin: 0 auto;" >
    <tr style="font-weight: bold; text-transform: capitalize; width: 72px;
    color: white; font-style: normal; font-family: Verdana; background-color: #00FF00;
   text-align: center; font-variant: normal" >


                    <th>Grupo</th>
                    <th>Departamentos</th>
                    <th>Provincias</th>
                    <th>Municipios</th>
                    <th>Mes</th>
                    </tr>
                    <tr>


     <th align="left" valign="top">

<select size="4" name="LstGrupo" id="LstGrupo" class="Azul" style="height:50px;width:100px;">
<option selected="selected" value="1">Departamento</option>
<option value="2">Provincia</option>
<option value="3">Municipio</option>
</select>


                        </th>
                    <th align="left" valign="top">



					<div class="row">
      <div class="col-md-4">
        <p>Seleccione Departamento
          <select id="lista_departamento" name="lista_departamento" class="form-control"></select>
        </p>
      </div>
                    <br />
                    <span id="CVDepto" style="color:Red;visibility:hidden;">Tiene que seleccionar un departamento o los que desea de la lista.</span>
                    </th>
                    <th align="left" valign="top"> 
<select size="4" name="LstProvincias" onchange="javascript:setTimeout('__doPostBack(\'LstProvincias\',\'\')', 0)" id="LstProvincias" class="Azul" style="height:165px;width:130px;">
	<option value="25">ABEL ITURRALDE                </option>
	<option value="23">AROMA                         </option>
	<option value="26">BAUTISTA SAAVEDRA             </option>
	<option value="14">CAMACHO                       </option>
	<option value="30">CARANAVI                      </option>
	<option value="17">FRANZ TAMAYO                  </option>
	<option value="29">GRAL. JOSE MANUEL PANDO       </option>
	<option value="28">GUALBERTO VILLARROEL          </option>
	<option value="18">INGAVI                        </option>
	<option value="20">INQUISIVI                     </option>
	<option value="16">LARECAJA                      </option>
	<option value="19">LOAYZA                        </option>
	<option value="22">LOS ANDES                     </option>
	<option value="27">MANCO KAPAC                   </option>
	<option value="15">MU&#209;ECAS                  </option>
	<option value="11">MURILLO                       </option>
	<option value="24">NOR YUNGAS                    </option>
	<option value="12">OMASUYOS                      </option>
	<option value="13">PACAJES                       </option>
	<option value="21">SUR YUNGAS                    </option>
</select>
                    </th>
                    <th align="left" valign="top"><select size="4" name="lstMunicipios" onchange="javascript:setTimeout('__doPostBack(\'lstMunicipios\',\'\')', 0)" id="lstMunicipios" class="Azul" style="height:165px;width:130px;">

</select>
                    
         </th>
        <th align="left" valign="top">

<select size="4" name="LstMes" multiple="multiple" id="LstMes" class="Azul" style="height:165px;width:100px;">
	<option value="1">Enero</option>
	<option value="2">Febrero</option>
	<option value="3">Marzo</option>
	<option value="4">Abril</option>
	<option value="5">Mayo</option>
	<option value="6">Junio</option>
	<option value="7">Julio</option>
	<option selected="selected" value="8">Agosto</option>
	<option value="9">Septiembre</option>
	<option value="10">Octubre</option>
	<option value="11">Noviembre</option>
	<option value="12">Diciembre</option>

</select>

<br />
                    <span id="CVMES" style="color:Red;visibility:hidden;">Tiene que seleccionar un mes de la lista.</span>
                    </tr>
                
                    <tr>
                    <th>
                        <input type="submit" name="BtnProcesar" value="Procesar" onclick="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;BtnProcesar&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, false))" id="BtnProcesar" class="Boton" />
                        </th>
                    <th>&nbsp;</th>
                    <th>&nbsp;</th>
                    <th>&nbsp;</th>
                    <th>&nbsp;</th>
                    </tr>
                
                </table>
                
            </div>
         </div>
     
     
            
        </div>
 
        <div id="pie">
                   
        </div>
    </div>
</form>
</body>
</html>
