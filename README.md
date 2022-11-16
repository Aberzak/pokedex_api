<h1 id="title-text" data-test-id="title-text" data-testid="title-text" class="css-1agkp1r e1vqopgf1" style="color: rgb(23, 43, 77);">Back-End</h1>
<div class="css-lfcs4t">
   <div class="ak-renderer-document">
      <div class="ak-renderer-extension undefined " data-layout="default" style="width: 100%;">
         <div class="ak-renderer-extension-overflow-container"></div>
      </div>
      <h2 id="1.-Description" data-renderer-start-pos="278">
         1. Description
      </h2>
      <p data-renderer-start-pos="294">The client has always been a big fan of the original 151 Pokémon, and would like to have an app that can serve as their Pokédex. They’d like to browse through the Pokemon, search, manage their favourites, and more. The app needs a REST api which needs to be developed.</p>
      <p data-renderer-start-pos="564">The’ve provided a list of things they want in the app (required), and also some extra’s (nice to have) if time allows it.</p>
      <p data-renderer-start-pos="687">Additionally they want this API to:</p>
      <ul class="ak-ul" data-indent-level="1">
         <li>
            <p data-renderer-start-pos="726">Be published in an online Git repository (Github, Bitbucket, …)</p>
         </li>
         <li>
            <p data-renderer-start-pos="793">Have clean commits</p>
         </li>
         <li>
            <p data-renderer-start-pos="815">Uses some open source packages (don’t reinvent the wheel), but be able to explain why.</p>
         </li>
      </ul>
      <h2 id="2.-Requirements" data-renderer-start-pos="905">
         2. Requirements
      </h2>
      <p data-renderer-start-pos="922">A basic list of functionality the back-end should have:</p>
      <ul class="ak-ul" data-indent-level="1">
         <li>
            <p data-renderer-start-pos="981">Implement the pre-defined OpenAPI spec. document (see <a href="#attachments" title="#attachments" data-renderer-mark="true" class="css-tgpl01">attachment</a>). This includes calls to:</p>
            <ul class="ak-ul" data-indent-level="2">
               <li>
                  <p data-renderer-start-pos="1075">Get a list of Pokémon</p>
               </li>
               <li>
                  <p data-renderer-start-pos="1100">A Pokémon’s details</p>
               </li>
               <li>
                  <p data-renderer-start-pos="1123">CRUD calls to manage a team (limited to 6)</p>
               </li>
            </ul>
         </li>
         <li>
            <p data-renderer-start-pos="1171">Store Pokémons' information in a database</p>
            <ul class="ak-ul" data-indent-level="2">
               <li>
                  <p data-renderer-start-pos="1216">Use an ORM with clearly defined models for each entity</p>
               </li>
               <li>
                  <p data-renderer-start-pos="1274">Use migrations as needed</p>
               </li>
            </ul>
         </li>
         <li>
            <p data-renderer-start-pos="1304">Provide a command to import a dump / seed of Pokémon (see <a href="#attachment" title="#attachment" data-renderer-mark="true" class="css-tgpl01">attachment</a>).</p>
            <ul class="ak-ul" data-indent-level="2">
               <li>
                  <p data-renderer-start-pos="1378">You may need to transform this data before importing it into your database.</p>
               </li>  
               <li>
                  <p data-renderer-start-pos="1378">Command to be used : "php artisan pokemon:local" </p>
               </li>
            </ul>
         </li>
         <li>
            <p data-renderer-start-pos="1459">Provide a command to import a Pokémon from an external service (see <a href="https://pokeapi.co/docs/v2#pokemon" title="https://pokeapi.co/docs/v2#pokemon" data-renderer-mark="true" class="css-tgpl01">docs</a>), given an external ID or name as parameter.</p>
         </li>
         <ul class="ak-ul" data-indent-level="2">
             <li>
                <p data-renderer-start-pos="1378">Command to be used : "php artisan pokemon:online {pokemon}"</p>
             </li>
         </ul>
      </ul>
      <h3 id="Nice-to-have" data-renderer-start-pos="1580">
         <strong data-renderer-mark="true">Nice to have</strong>
         <span role="presentation" class="heading-anchor-wrapper">
            <button aria-label="Copy link to heading" class="css-779anb">
               <span role="img" aria-label="Copy" class="css-1afrefi" style="--icon-primary-color:var(--ds-icon-subtle, #6B778C); --icon-secondary-color:var(--ds-surface, #FFFFFF);">
                  <svg width="24" height="24" viewBox="0 0 24 24" role="presentation">
                     <g fill="currentColor" fill-rule="evenodd">
                        <path d="M12.856 5.457l-.937.92a1.002 1.002 0 000 1.437 1.047 1.047 0 001.463 0l.984-.966c.967-.95 2.542-1.135 3.602-.288a2.54 2.54 0 01.203 3.81l-2.903 2.852a2.646 2.646 0 01-3.696 0l-1.11-1.09L9 13.57l1.108 1.089c1.822 1.788 4.802 1.788 6.622 0l2.905-2.852a4.558 4.558 0 00-.357-6.82c-1.893-1.517-4.695-1.226-6.422.47"></path>
                        <path d="M11.144 19.543l.937-.92a1.002 1.002 0 000-1.437 1.047 1.047 0 00-1.462 0l-.985.966c-.967.95-2.542 1.135-3.602.288a2.54 2.54 0 01-.203-3.81l2.903-2.852a2.646 2.646 0 013.696 0l1.11 1.09L15 11.43l-1.108-1.089c-1.822-1.788-4.802-1.788-6.622 0l-2.905 2.852a4.558 4.558 0 00.357 6.82c1.893 1.517 4.695 1.226 6.422-.47"></path>
                     </g>
                  </svg>
               </span>
            </button>
         </span>
      </h3>
      <p data-renderer-start-pos="1594">There are some extra’s the client would like (Ready):</p>
      <ul class="ak-ul" data-indent-level="1">
         <li>
            <p data-renderer-start-pos="1668">Relations in Database</p>
         </li>
         <li>
            <p data-renderer-start-pos="1693">Testing</p>
         </li>
      </ul>
      
   </div>
</div>
