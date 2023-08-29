# SiteBootStrapPainelCMSDocker
Site criado com BootStrap e Painel CMS para gerenciamento, por meio do Docker!

Para rodar esse projeto em sua máquina, baixe todos os arquivos em uma pasta. Em seguidar inicialize o docker na raiz desse projeto e dê o comando docker-compose up -d. Isso irá inicializar o container e possibilitará acessar esse site em seu navegador na porta 80.

Para fazer os inserts no banco de dados do container postgre, execute o seguinte comando:
  docker run exec -it nomedocontainer psql -U postgres

  CREATE TABLE "tb_sobre" (
	"id" SERIAL,
	"sobre" TEXT
);

CREATE TABLE "tb_equipe" (
	"id" SERIAL,
	"nome" TEXT,
	"descricao" TEXT
);


INSERT INTO "public"."tb_sobre" ("id", "sobre") VALUES ('1', '<div class="col-md-4">
													            <h3>
														            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up-right-square" viewBox="0 0 16 16">
														              <path fill-rule="evenodd" d="M15 2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2zM0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm5.854 8.803a.5.5 0 1 1-.708-.707L9.243 6H6.475a.5.5 0 1 1 0-1h3.975a.5.5 0 0 1 .5.5v3.975a.5.5 0 1 1-1 0V6.707l-4.096 4.096z"/>
														            </svg>
													            </h3>
													            <h2>Diferencial #1</h2>
													            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante. Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
													              Integer posuere erat a ante.</p>
												         	 </div>
         												 <div class="col-md-4">
            <h3>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-circle-fill" viewBox="0 0 16 16">
              <path d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"/>
            </svg>
            </h3>
            <h2>Diferencial #1</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante. Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
              Integer posuere erat a ante.</p>
          </div>

          <div class="col-md-4">
            <h3>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
            </svg>
            </h3>
            <h2>Diferencial #1</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante. Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
              Integer posuere erat a ante.</p>
          </div>');
