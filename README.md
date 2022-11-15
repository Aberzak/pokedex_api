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
            </ul>
         </li>
         <li>
            <p data-renderer-start-pos="1459">Provide a command to import a Pokémon from an external service (see <a href="https://pokeapi.co/docs/v2#pokemon" title="https://pokeapi.co/docs/v2#pokemon" data-renderer-mark="true" class="css-tgpl01">docs</a>), given an external ID or name as parameter.</p>
         </li>
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
      <p data-renderer-start-pos="1594">There are some extra’s the client would like (in order of preference):</p>
      <ul class="ak-ul" data-indent-level="1">
         <li>
            <p data-renderer-start-pos="1668">Relations in Database</p>
         </li>
         <li>
            <p data-renderer-start-pos="1693">Testing</p>
         </li>
         <li>
            <p data-renderer-start-pos="1704">Authorization for the team routes using a hardcoded token (in Authorization header)</p>
         </li>
         <li>
            <p data-renderer-start-pos="1791">Save images from import (local file storage, database or S3)</p>
         </li>
         <li>
            <p data-renderer-start-pos="1855">Run in Docker</p>
         </li>
      </ul>
      <h2 id="[inlineExtension]3.-Attachments" data-renderer-start-pos="1872">
         <span>
            <div style="display: none;"></div>
            <span class="css-1nzcsrg e1ihjts80" data-fabric-macro="6551de7513e5d9c26aa09f5da9a41ee6" data-macro-body="" data-macro-parameters="{&quot;&quot;:&quot;attachments&quot;}" data-testid="legacy-macro-element"><span class="confluence-anchor-link conf-macro output-inline" data-hasbody="false" data-local-id="4a8c8a1f-82d2-410e-8130-86a24c751390" data-macro-id="6551de7513e5d9c26aa09f5da9a41ee6" data-macro-name="anchor" id="Back-End-attachments"><span class="confluence-anchor-link" id="attachments"> </span></span></span>
            <div style="display: none;"></div>
         </span>
         3. Attachments
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
      </h2>
      <div class="MediaGroup">
         <div data-context-id="556335205" data-type="file" data-node-type="media" data-id="13e1c295-4709-4aa7-8b5e-e74ee729f83e" data-collection="contentId-556335205" data-file-name="pokemons.json" data-file-size="32900144" data-file-mime-type="text/plain" data-alt="">
            <div id="newFileExperienceWrapper" class="new-file-experience-wrapper css-1rqrju1" data-testid="media-card-view">
               <div role="presentation">
                  <div class="media-file-card-view css-1yn77bd" data-testid="media-file-card-view" data-test-status="failed-processing" data-test-media-name="pokemons.json" data-test-progress="1">
                     <div id="iconWrapper" class="css-4viauj">
                        <div data-testid="media-card-file-type-icon" data-type="source-code" class="css-1mgeve7 edaccvb0">
                           <span role="img" aria-label="source-code" class="css-1afrefi" style="--icon-primary-color:currentColor; --icon-secondary-color:var(--ds-surface, #FFFFFF);">
                              <svg width="24" height="24" viewBox="0 0 24 24" role="presentation">
                                 <path fill="#00B8D9" fill-rule="evenodd" d="M3 0h18a3 3 0 013 3v18a3 3 0 01-3 3H3a3 3 0 01-3-3V3a3 3 0 013-3zm5.017 12.265l-2.58-2.501L8.236 7.05a.999.999 0 10-1.392-1.436l-3.54 3.432a1 1 0 000 1.436l3.32 3.219a1 1 0 101.393-1.436zm6.638-8.21a1 1 0 00-1.271.62l-4.83 14.046a1 1 0 001.892.65l4.829-14.045a1 1 0 00-.62-1.271zm6.081 9.776l-3.32-3.219a.999.999 0 10-1.393 1.436l2.58 2.501-2.799 2.714a.999.999 0 101.392 1.436l3.54-3.432a1 1 0 000-1.436z"></path>
                              </svg>
                           </span>
                        </div>
                        <div id="iconMessageWrapper" class="css-1dlxt3f"><span><span>Preview unavailable</span></span></div>
                     </div>
                     <div class="media-card-blanket css-zicjcr"></div>
                     <div id="titleBoxWrapper" class="css-rxl962">
                        <div id="titleBoxHeader" class="css-nbwf6p"><span class="css-1892tm3 evjscy50">pokemo</span><span class="css-1wnbhvg evjscy51">ns.json</span></div>
                        <div id="titleBoxFooter" class="css-lc8yo4">03 May 2022, 05:36 PM</div>
                     </div>
                  </div>
                  <div id="actionsBarWrapper" class="media-card-actions-bar css-1rpkteg">
                     <span data-testid="prevent-click-through">
                        <div class="css-1nfb9tn">
                           <div id="cardActionButton" data-testid="media-card-primary-action" class="css-1e2vgn4">
                              <span role="img" aria-label="Download" class="css-snhnyn" style="--icon-primary-color:currentColor; --icon-secondary-color:var(--ds-surface, #FFFFFF);">
                                 <svg width="24" height="24" viewBox="0 0 24 24" role="presentation">
                                    <g fill="currentColor" fill-rule="evenodd">
                                       <path d="M10.687 17.292a.983.983 0 00-1.397 0 1 1 0 000 1.407l1.964 1.98a1.082 1.082 0 001.538 0l1.919-1.933a1 1 0 000-1.408.983.983 0 00-1.398 0l-1.29 1.3-1.336-1.346z" fill-rule="nonzero"></path>
                                       <path d="M13.001 19.993L13 10.006C13 9.451 12.552 9 12 9s-1 .45-1 1.007l.001 9.987c0 .555.448 1.006 1 1.006s1-.45 1-1.007z" fill-rule="nonzero"></path>
                                       <path d="M7.938 5.48a4.8 4.8 0 00-.777-.062C4.356 5.418 2 7.62 2 10.498 2 13.409 4.385 16 7.1 16h2.881v-1.993H7.1c-1.657 0-3.115-1.663-3.115-3.508 0-1.778 1.469-3.087 3.104-3.087h.012c.389 0 .686.05.97.15l.17.063c.605.248.875-.246.875-.246l.15-.267c.73-1.347 2.201-2.096 3.716-2.12a4.14 4.14 0 014.069 3.645l.046.34s.071.525.665.525c.013 0 .012.005.023.005h.254c1.136 0 1.976.959 1.976 2.158 0 1.207-.987 2.342-2.07 2.342h-3.964V16h3.964C20.105 16 22 13.955 22 11.665c0-2-1.312-3.663-3.138-4.074-.707-2.707-3.053-4.552-5.886-4.591-1.975.02-3.901.9-5.038 2.48z"></path>
                                    </g>
                                 </svg>
                              </span>
                           </div>
                        </div>
                     </span>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <p data-renderer-start-pos="1892">&nbsp;</p>
      <div class="MediaGroup">
         <div data-context-id="556335205" data-type="file" data-node-type="media" data-id="6c4e4f1b-e26a-4248-9690-eb683c3dbaf0" data-collection="contentId-556335205" data-file-name="openapi.yaml" data-file-size="9902" data-file-mime-type="text/plain" data-alt="">
            <div id="newFileExperienceWrapper" class="new-file-experience-wrapper css-1wv0v20" data-testid="media-card-view">
               <div role="presentation">
                  <div class="media-file-card-view css-1yn77bd" data-testid="media-file-card-view" data-test-status="complete" data-test-media-name="openapi.yaml" data-test-progress="1">
                     <img data-testid="media-image" draggable="false" alt="" src="blob:https://appwise.atlassian.net/8a64c773-7eae-4bcf-8075-e0dbb8ba60b0#media-blob-url=true&amp;id=6c4e4f1b-e26a-4248-9690-eb683c3dbaf0&amp;collection=contentId-556335205&amp;contextId=556335205&amp;mimeType=text%2Fplain&amp;name=openapi.yaml&amp;size=9902&amp;width=156&amp;height=125&amp;alt=" style="position: absolute; left: 50%; top: 50%; object-fit: contain; image-orientation: none; transform: translate(-50%, -50%); height: 100%;">
                     <div class="media-card-blanket css-zicjcr"></div>
                     <div id="titleBoxWrapper" class="css-rxl962">
                        <div id="titleBoxHeader" class="css-nbwf6p"><span class="css-1892tm3 evjscy50">opena</span><span class="css-1wnbhvg evjscy51">pi.yaml</span></div>
                        <div id="titleBoxFooter" class="css-lc8yo4">03 May 2022, 05:18 PM</div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <h2 id="4.-Available-Stacks" data-renderer-start-pos="1897">
         4. Available Stacks
      </h2>
      <p data-renderer-start-pos="1918">&nbsp;</p>
      <div data-node-type="expand" data-title="ExpressJS (NodeJS &amp; TypeScript)" data-expanded="false" class="css-1am681y">
         <button aria-labelledby="expand-title-37" aria-expanded="false" contenteditable="false" class="css-e9q056">
            <div role="presentation" class="css-rq7z01">
               <div class="css-167x4to">
                  <span role="img" aria-label="Expand content" class="css-snhnyn" style="--icon-primary-color:currentColor; --icon-secondary-color:var(--ds-surface, #FFFFFF);">
                     <svg width="24" height="24" viewBox="0 0 24 24" role="presentation">
                        <path d="M10.294 9.698a.988.988 0 010-1.407 1.01 1.01 0 011.419 0l2.965 2.94a1.09 1.09 0 010 1.548l-2.955 2.93a1.01 1.01 0 01-1.42 0 .988.988 0 010-1.407l2.318-2.297-2.327-2.307z" fill="currentColor" fill-rule="evenodd"></path>
                     </svg>
                  </span>
               </div>
            </div>
            <span id="expand-title-37" class="css-xd7zii">ExpressJS (NodeJS &amp; TypeScript)</span>
         </button>
         <div class="css-15n9v4z">
            <div class="expand-content-wrapper">
               <div class="css-2c6ch1">
                  <div style="display: block; width: 100%; position: absolute;"></div>
                  <div class="css-1yrjmoz"></div>
                  <p data-renderer-start-pos="1921"><strong data-renderer-mark="true">Requirements</strong></p>
                  <ul class="ak-ul" data-indent-level="1">
                     <li>
                        <p data-renderer-start-pos="1937">TypeScript 4.6 (or higher)</p>
                     </li>
                     <li>
                        <p data-renderer-start-pos="1967">PostgreSQL </p>
                     </li>
                     <li>
                        <p data-renderer-start-pos="1982">Packages:</p>
                        <ul class="ak-ul" data-indent-level="2">
                           <li>
                              <p data-renderer-start-pos="1995"><a href="http://expressjs.com" title="http://expressjs.com" data-renderer-mark="true" class="css-tgpl01">ExpressJS</a></p>
                           </li>
                           <li>
                              <p data-renderer-start-pos="2008"><a href="https://typeorm.io" title="https://typeorm.io" data-renderer-mark="true" class="css-tgpl01">TypeORM</a></p>
                           </li>
                           <li>
                              <p data-renderer-start-pos="2019"><a href="https://eslint.org" title="https://eslint.org" data-renderer-mark="true" class="css-tgpl01">ESLint</a> (default rules)</p>
                           </li>
                        </ul>
                     </li>
                  </ul>
                  <p data-renderer-start-pos="2047"><strong data-renderer-mark="true">Optional</strong></p>
                  <ul class="ak-ul" data-indent-level="1">
                     <li>
                        <p data-renderer-start-pos="2059">…</p>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
      <div data-node-type="expand" data-title="Laravel (PHP)" data-expanded="false" class="css-1am681y">
         <button aria-labelledby="expand-title-38" aria-expanded="false" contenteditable="false" class="css-e9q056">
            <div role="presentation" class="css-rq7z01">
               <div class="css-167x4to">
                  <span role="img" aria-label="Expand content" class="css-snhnyn" style="--icon-primary-color:currentColor; --icon-secondary-color:var(--ds-surface, #FFFFFF);">
                     <svg width="24" height="24" viewBox="0 0 24 24" role="presentation">
                        <path d="M10.294 9.698a.988.988 0 010-1.407 1.01 1.01 0 011.419 0l2.965 2.94a1.09 1.09 0 010 1.548l-2.955 2.93a1.01 1.01 0 01-1.42 0 .988.988 0 010-1.407l2.318-2.297-2.327-2.307z" fill="currentColor" fill-rule="evenodd"></path>
                     </svg>
                  </span>
               </div>
            </div>
            <span id="expand-title-38" class="css-xd7zii">Laravel (PHP)</span>
         </button>
         <div class="css-15n9v4z">
            <div class="expand-content-wrapper">
               <div class="css-2c6ch1">
                  <div style="display: block; width: 100%; position: absolute;"></div>
                  <div class="css-1yrjmoz"></div>
                  <p data-renderer-start-pos="2066"><strong data-renderer-mark="true">Requirements</strong></p>
                  <ul class="ak-ul" data-indent-level="1">
                     <li>
                        <p data-renderer-start-pos="2082">PHP 8.1 (or higher)</p>
                     </li>
                     <li>
                        <p data-renderer-start-pos="2105">MySQL</p>
                     </li>
                     <li>
                        <p data-renderer-start-pos="2114"><a href="https://laravel.com" title="https://laravel.com" data-renderer-mark="true" class="css-tgpl01">Laravel</a></p>
                     </li>
                  </ul>
                  <p data-renderer-start-pos="2125"><strong data-renderer-mark="true">Optional</strong></p>
                  <ul class="ak-ul" data-indent-level="1">
                     <li>
                        <p data-renderer-start-pos="2137">…</p>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
      <div data-node-type="expand" data-title="FastAPI (Python)" data-expanded="false" class="css-1am681y">
         <button aria-labelledby="expand-title-39" aria-expanded="false" contenteditable="false" class="css-e9q056">
            <div role="presentation" class="css-rq7z01">
               <div class="css-167x4to">
                  <span role="img" aria-label="Expand content" class="css-snhnyn" style="--icon-primary-color:currentColor; --icon-secondary-color:var(--ds-surface, #FFFFFF);">
                     <svg width="24" height="24" viewBox="0 0 24 24" role="presentation">
                        <path d="M10.294 9.698a.988.988 0 010-1.407 1.01 1.01 0 011.419 0l2.965 2.94a1.09 1.09 0 010 1.548l-2.955 2.93a1.01 1.01 0 01-1.42 0 .988.988 0 010-1.407l2.318-2.297-2.327-2.307z" fill="currentColor" fill-rule="evenodd"></path>
                     </svg>
                  </span>
               </div>
            </div>
            <span id="expand-title-39" class="css-xd7zii">FastAPI (Python)</span>
         </button>
         <div class="css-15n9v4z">
            <div class="expand-content-wrapper">
               <div class="css-2c6ch1">
                  <div style="display: block; width: 100%; position: absolute;"></div>
                  <div class="css-1yrjmoz"></div>
                  <p data-renderer-start-pos="2144"><strong data-renderer-mark="true">Requirements</strong></p>
                  <ul class="ak-ul" data-indent-level="1">
                     <li>
                        <p data-renderer-start-pos="2160">Python 3.10 (or higher)</p>
                     </li>
                     <li>
                        <p data-renderer-start-pos="2187"><a href="https://fastapi.tiangolo.com" title="https://fastapi.tiangolo.com" data-renderer-mark="true" class="css-tgpl01">FastAPI</a></p>
                     </li>
                  </ul>
                  <p data-renderer-start-pos="2198"><strong data-renderer-mark="true">Optional</strong></p>
                  <ul class="ak-ul" data-indent-level="1">
                     <li>
                        <p data-renderer-start-pos="2210">…</p>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
      <p data-renderer-start-pos="2216">&nbsp;</p>
   </div>
</div>
