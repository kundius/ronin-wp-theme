import EmblaCarousel from 'embla-carousel'
import { addPrevNextBtnsClickHandlers } from './EmblaCarouselArrowButtons'

export function applyActivityEmbla(wrap) {
  const viewportNode = wrap.querySelector('[data-activity-embla-viewport]')
  const navNodes = wrap.querySelectorAll('[data-activity-embla-controls]') || []

  const emblaApi = EmblaCarousel(viewportNode, { loop: true, slidesToScroll: 'auto' })

  navNodes.forEach((el) => {
    const prevBtnNode = el.querySelector('[data-activity-embla-controls-prev]')
    const nextBtnNode = el.querySelector('[data-activity-embla-controls-next]')
    if (prevBtnNode && nextBtnNode) {
      const removePrevNextBtnsClickHandlers = addPrevNextBtnsClickHandlers(
        emblaApi,
        prevBtnNode,
        nextBtnNode
      )
      emblaApi.on('destroy', removePrevNextBtnsClickHandlers)
    }
  })
}

export function initActivityEmbla() {
  const nodes = Array.from(document.querySelectorAll('[data-activity-embla]'))
  nodes.forEach(applyActivityEmbla)
}
