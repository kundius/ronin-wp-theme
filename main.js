import './src/styles/fonts.css'
import 'normalize.css'
import './src/styles/main.css'
import './src/styles/icons.css'
import './src/styles/header.css'
import './src/styles/footer.css'
import './src/styles/modal.css'
import './src/styles/template-home.css'

import fslightbox from 'fslightbox'
import { Mask, MaskInput } from 'maska'

import { initStickyHeader } from './src/scripts/sticky-header'
import { initMobileMenu } from './src/scripts/mobile-menu'
import { initActivityEmbla } from './src/scripts/activity-embla'
import { initCallbackButton } from './src/scripts/callback-button'
import { initFeedbackForm } from './src/scripts/feedback-form'

new MaskInput('[data-maska]')

initStickyHeader()
initMobileMenu()
initActivityEmbla()
initCallbackButton()
initFeedbackForm()
