		<div class="project" id="listen">
			<div class="container">
				<h2>Rubble Listening Device</h2>
				<h3>Course: Computer Systems Design</h3>

				<div class="slidewrapper">
					<div class="flexslider">
						<!--Flexslider created by WooCommerce -->
						<ul class="slides">
							<li>
								<img src="pics/device.png" title="Listening device, top view" alt="Listening device, top view" />
							</li>
							<li>
								<img src="pics/internal.jpg" title="SD card location, listening device." alt="internal view of listening device showing SD card location" />
							</li>
							<li>
								<img src="pics/side.jpg" title="Listening device, side view" alt="Listening device, side view" />
							</li>
							<li>
								<img src="pics/audioComp.png" title="Visual comparison of noise reduction." alt="comparison of audio files showing a reduction in noise" />
							</li>
						</ul>
					</div>
				</div>

				<h3><button class="accordion">Project Description</button></h3>
				<div class="panel">
					<p>&emsp;The professor who taught this course is part of a U.S. disaster relief team. This team is called in to respond to natural
						disasters all over the country, assisting in the technology side of relief: piloting drones to see what is going on in an area that is
						unsafe to send humans into, getting networks set up in the aftermath for relief workers to communicate using, and implementing new
						technologies that improve disaster response, for example.
						<br><br>&emsp;The class was presented with a list of projects that she and her team saw a need for in their experiences in these disaster
						response situations. Students then "bid" upon projects that interested them or that they could best contribute to as a team member, outlining
						what that person could bring to the team. My team was tasked with the creation of a device to "hear" survivors trapped under rubble. A very common
						experience with survivors who are rescued from underneath rubble is that the survivor was yelling or banging on something, but nobody on the surface could hear them.
						<br><br>&emsp;â€ƒThe project requirements were: the device must be self-contained and self-reliant (many disaster situations have limited to no
						wireless networks on which to rely on), the device must be able to be operated and handled by someone wearing "bunker gear" or similar
						movement-restricting gear, the device must record for 5 minutes, then wait a user-selected interval before the next recording, and the device
						must be able to last 12 hours on a single charge.
						<br><br>&emsp;Our team used the ReSpeaker Core v2, which very similar to the board used in the Amazon Echo. This board's microphones have a small level of base noise
						cancellation to begin with, which we used to our advantage in further noise cancellation. This board has an array of six microphones that we used to get a "full picture"
						of the surrounding area's noise. We used a variation upon an existing Digital Signal Processing algorithm, with the addition of a Fourier transform performed to further
						reduce the noise in the sound. Python was used for the entirety of this project, as it is natively compatible with the ReSpeaker, as well as being very lightweight in terms
						of memory space needed. With such a small device, memory size is a concern to begin with, as well as wanting to reserve as much space as possible for recording files.
						<br><br>&emsp;For external controls, we used a single input button, as well as a power toggle switch. Additionally, an LED light on the top of the device was used to indicate
						power status. Once powered on, the LED would light up green and the device would prompt the user to use this button to select the time interval between recordings. A choice
						of 5, 10, 15, 30, or 60 minutes between recordings could be cycled through. This was done by pressing the button on the top of the device repeatedly, with the device audibly
						voicing the selected interval. A long hold of the button confirmed the interval selection.
						<br><br>&emsp;Once the interval was selected, the device would give a pre-recorded message informing anyone in hearing range that this device was powered on, that it would be
						recording for the next five minutes to hear them and find them, and that they should shout or bang on metal after the message ended. The device would then commence its cycle
						of recording and waiting, until the toggle switch was flipped, the SD card was filled, or the battery ran out. The pre-recorded message would play each time before recording audio.
						Powering off the device while it was recording, or processing audio would cause the loss of that stage of the recording but would not cause a process lock to be active upon the
						device's next power up.
						<br><br>&emsp;After the device was retrieved from the site, an SD card with the recordings could then be removed. This SD card would then be inserted into a compatible device,
						and human eyes and ears would be necessary to find the "spikes" in the audio files, listen to these, and determine if this spike was the result of a survivor, or just an anomaly
						in the overall noise of the disaster site.
						<br><br>&emsp;Future work on this project would be to have a higher level of automation on the final sound files. Another script could be run which would be able to cut out and
						timestamp these spikes, compiling them into an easier-to-digest file. This would reduce load on any human volunteer or worker, as they would only have to listen to the one file,
						instead of searching a much larger file for the spikes which may or may not indicate a survivor.
					</p>

					<div class="up">
						<a href="#top">
							<img src="pics/up.png" title="Jump to top" alt="Jump to top">
							<div class="uTxt">Jump to Top</div>
						</a>
					</div>

				</div>

				<h3><button class="accordion">Languages and Skills</button></h3>
				<div class="panel">
					<ul>
						<li>Python</li>
						<li>Analog to Digital Conversion and Processing</li>
						<li>Use & Manipulation of Python libraries</li>
						<li>Hardware Input & Interactions</li>
						<li>Software Algorithms</li>
						<li>Project Bid Process</li>
						<li>Real-World Problem Experience</li>
						<li>Client Acceptance Testing</li>
						<li>Client presentation</li>
						<li>Project Time Budgeting (Gantt charts, recordkeeping)</li>
						<li>Technical Documentation (proposals, technical update reports, non-technical user's manual,
							technical programmer's manual, and final technical report)</li>
					</ul>
					<div class="up">
						<a href="#top">
							<img src="pics/up.png" title="Jump to top" alt="Jump to top">
							<div class="uTxt">Jump to Top</div>
						</a>
					</div>
				</div>
			</div>
		</div> <!--End of Rubble Listening Device Project-->
