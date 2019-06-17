<div class="cbw-block">
	<div
		class="cx-vui-component cx-vui-component--vertical-layout no-indents"
		v-if="isActivated"
	>
		<div class="cx-vui-component__label">{{ pageTitle }}</div>
	</div>
	<cx-vui-input
		v-else
		:element-id="'license_key'"
		:label="pageTitle"
		:size="'fullwidth'"
		:wrapper-css="[ 'vertical-layout' ]"
		:error="error"
		:placeholder="'<?php _e( 'Enter your license key', 'crocoblock-wizard' ); ?>'"
		@on-focus="clearErrors"
		@on-keyup="maybeChangeBtnLabel"
		v-model="licenseKey"
	></cx-vui-input>
	<div class="cbw-block__error-message" v-if="errorMessage && error">{{ errorMessage }}</div>
	<div class="cbw-block__success-message" v-if="successMessage && success">{{ successMessage }}</div>
	<div class="cbw-radiogroup">
		<div class="cbw-radio">
			<label>
				<input
					type="radio"
					v-model="installationType"
					value="full"
					@change="maybeChangeBtnLabel"
				>
				<?php _e( 'Full Crocoblock installation', 'crocoblock-wizard' ); ?>
			</label>
			<div
				class="cbw-popup-trigger"
				@click="openVideoPopup( tutorials.full )"
				v-if="0 === 1"
			>
				<svg width="16" height="12" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M15.8438 2.58333C15.8438 2.58333 15.7969 2.36667 15.7031 1.93333C15.6094 1.5 15.4427 1.15556 15.2031 0.9C14.901 0.555556 14.5938 0.355556 14.2812 0.3C13.9792 0.233333 13.75 0.188889 13.5938 0.166667C13.0417 0.122222 12.4375 0.0888889 11.7812 0.0666667C11.125 0.0444444 10.5156 0.0277778 9.95312 0.0166667C9.40104 0.00555556 8.9375 0 8.5625 0C8.1875 0 8 0 8 0C8 0 7.8125 0 7.4375 0C7.0625 0 6.59375 0.00555556 6.03125 0.0166667C5.47917 0.0277778 4.875 0.0444444 4.21875 0.0666667C3.5625 0.0888889 2.95833 0.122222 2.40625 0.166667C2.25 0.188889 2.01562 0.233333 1.70312 0.3C1.40104 0.355556 1.09896 0.555556 0.796875 0.9C0.557292 1.15556 0.390625 1.5 0.296875 1.93333C0.203125 2.36667 0.15625 2.58333 0.15625 2.58333C0.15625 2.58333 0.130208 2.87222 0.078125 3.45C0.0260417 4.02778 0 4.66111 0 5.35V6.65C0 7.33889 0.0260417 7.97222 0.078125 8.55C0.130208 9.11667 0.15625 9.4 0.15625 9.4C0.15625 9.4 0.203125 9.62222 0.296875 10.0667C0.390625 10.5 0.557292 10.8444 0.796875 11.1C1.09896 11.4444 1.42188 11.6444 1.76562 11.7C2.11979 11.7556 2.38542 11.8 2.5625 11.8333C2.88542 11.8667 3.34896 11.8944 3.95312 11.9167C4.55729 11.9389 5.15625 11.9556 5.75 11.9667C6.35417 11.9778 6.88021 11.9889 7.32812 12C7.77604 12 8 12 8 12C8 12 8.1875 12 8.5625 12C8.9375 12 9.40104 11.9944 9.95312 11.9833C10.5156 11.9722 11.125 11.9556 11.7812 11.9333C12.4375 11.9 13.0417 11.8611 13.5938 11.8167C13.75 11.8056 13.9792 11.7722 14.2812 11.7167C14.5938 11.65 14.901 11.4444 15.2031 11.1C15.4427 10.8444 15.6094 10.5 15.7031 10.0667C15.7969 9.62222 15.8438 9.4 15.8438 9.4C15.8438 9.4 15.8698 9.11667 15.9219 8.55C15.974 7.97222 16 7.33889 16 6.65V5.35C16 4.66111 15.974 4.02778 15.9219 3.45C15.8698 2.87222 15.8438 2.58333 15.8438 2.58333ZM6.34375 8.21667V3.41667L10.6719 5.81667L6.34375 8.21667Z"/></svg>
			</div>
		</div>
		<div class="cbw-radio">
			<label>
				<input
					type="radio"
					v-model="installationType"
					value="plugins"
					@change="maybeChangeBtnLabel"
				>
				<?php _e( 'Jet Plugins installation', 'crocoblock-wizard' ); ?>
			</label>
			<div
				class="cbw-popup-trigger"
				@click="openVideoPopup( tutorials.full )"
				v-if="0 === 1"
			>
				<svg width="16" height="12" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M15.8438 2.58333C15.8438 2.58333 15.7969 2.36667 15.7031 1.93333C15.6094 1.5 15.4427 1.15556 15.2031 0.9C14.901 0.555556 14.5938 0.355556 14.2812 0.3C13.9792 0.233333 13.75 0.188889 13.5938 0.166667C13.0417 0.122222 12.4375 0.0888889 11.7812 0.0666667C11.125 0.0444444 10.5156 0.0277778 9.95312 0.0166667C9.40104 0.00555556 8.9375 0 8.5625 0C8.1875 0 8 0 8 0C8 0 7.8125 0 7.4375 0C7.0625 0 6.59375 0.00555556 6.03125 0.0166667C5.47917 0.0277778 4.875 0.0444444 4.21875 0.0666667C3.5625 0.0888889 2.95833 0.122222 2.40625 0.166667C2.25 0.188889 2.01562 0.233333 1.70312 0.3C1.40104 0.355556 1.09896 0.555556 0.796875 0.9C0.557292 1.15556 0.390625 1.5 0.296875 1.93333C0.203125 2.36667 0.15625 2.58333 0.15625 2.58333C0.15625 2.58333 0.130208 2.87222 0.078125 3.45C0.0260417 4.02778 0 4.66111 0 5.35V6.65C0 7.33889 0.0260417 7.97222 0.078125 8.55C0.130208 9.11667 0.15625 9.4 0.15625 9.4C0.15625 9.4 0.203125 9.62222 0.296875 10.0667C0.390625 10.5 0.557292 10.8444 0.796875 11.1C1.09896 11.4444 1.42188 11.6444 1.76562 11.7C2.11979 11.7556 2.38542 11.8 2.5625 11.8333C2.88542 11.8667 3.34896 11.8944 3.95312 11.9167C4.55729 11.9389 5.15625 11.9556 5.75 11.9667C6.35417 11.9778 6.88021 11.9889 7.32812 12C7.77604 12 8 12 8 12C8 12 8.1875 12 8.5625 12C8.9375 12 9.40104 11.9944 9.95312 11.9833C10.5156 11.9722 11.125 11.9556 11.7812 11.9333C12.4375 11.9 13.0417 11.8611 13.5938 11.8167C13.75 11.8056 13.9792 11.7722 14.2812 11.7167C14.5938 11.65 14.901 11.4444 15.2031 11.1C15.4427 10.8444 15.6094 10.5 15.7031 10.0667C15.7969 9.62222 15.8438 9.4 15.8438 9.4C15.8438 9.4 15.8698 9.11667 15.9219 8.55C15.974 7.97222 16 7.33889 16 6.65V5.35C16 4.66111 15.974 4.02778 15.9219 3.45C15.8698 2.87222 15.8438 2.58333 15.8438 2.58333ZM6.34375 8.21667V3.41667L10.6719 5.81667L6.34375 8.21667Z"/></svg>
			</div>
		</div>
	</div>
	<cx-vui-button
		:disabled="startLocked"
		:button-style="'accent'"
		:loading="loading"
		@click="activateLicense"
	>
		<span slot="label">{{ buttonLabel }}</span>
	</cx-vui-button>
	<div
		v-if="isActivated"
		class="cbw-deactivate-license"
	>
		<a
			:href="deactivateLink"
		><?php
			_e( 'Deactivate current license', 'crocoblock-wizard' );
		?></a>
	</div>
	<cbw-video-popup
		:url="videoURL"
		:active="showVideo"
		@close="showVideo = false"
	></cbw-video-popup>
</div>