const rangeSlider = () => {
    const sliderLeft = document.querySelectorAll('.left-slide');
    const sliderRight = document.querySelectorAll('.right-slide');
    const range = document.querySelectorAll('.range');
    const leftThumb = document.querySelectorAll('.left-thumb');
    const rightThumb = document.querySelectorAll('.right-thumb');
    const leftCount = document.querySelectorAll('.left-count');
    const rightCount = document.querySelectorAll('.right-count');
   
console.log(leftCount)
    const setValue = (firstElement, secondElement, thumb, range, count, position) => {
        const currentElement = firstElement,
                min = parseInt(currentElement.min),
                max = parseInt(currentElement.max);

                

                if(position === 'left') {
                    currentElement.value = Math.min(parseInt(currentElement.value), parseInt(secondElement.value) -1);
                    
                } else if(position === 'right') { 
                    currentElement.value = Math.max(parseInt(currentElement.value), parseInt(secondElement.value) -1);
                   
                }
        
        
         const percent = ((currentElement.value - min) / (max - min)) * 100;

        if(position === 'left') {
            thumb.style.left = `${percent}%`;
            range.style.left = `${percent}%`;
            count.style.left = `${percent}%`;
            count.innerText = parseInt(percent);
          
        } else if(position === 'right') {
            thumb.style.right = (100 - percent + '%');
            range.style.right =  (100 - percent + '%');
            count.style.right =  (100 - percent + '%');
            count.innerText = parseInt(percent);
        }

    };


   try {
    sliderLeft.forEach((item, index) => {
        item.addEventListener('input', () => {
            setValue(item, sliderRight[index], leftThumb[index], range[index], leftCount[index], 'left');
        });
        setValue(item, sliderRight[index], leftThumb[index], range[index], leftCount[index], 'left');
    });

    sliderRight.forEach((item, index) => {
        item.addEventListener('input', () => {
            setValue(item, sliderLeft[index], rightThumb[index], range[index], rightCount[index],  'right');
        });
        setValue(item, sliderLeft[index], rightThumb[index], range[index],  rightCount[index],  'right');
    });
   } catch(e) {}

};


export default rangeSlider;