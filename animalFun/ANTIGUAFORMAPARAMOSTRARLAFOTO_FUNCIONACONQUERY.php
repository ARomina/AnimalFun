 <img src=<?php 
                        if(isset($row['fotoPerfilUsuario']) && !empty($row['fotoPerfilUsuario'])){
                           echo '"'.str_replace('../', '', $row['fotoPerfilUsuario']).'"';
                        }else{
                          echo 'img/avatar-placeholder.jpg';
                        }
                        ?> height="250" width="250" class="center-block">