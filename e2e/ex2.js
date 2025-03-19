const path = require('path');

// Generated by Selenium IDE
const { Builder, By, Key, until } = require('selenium-webdriver')
const assert = require('assert')
require('mocha');

describe('it manage tasks', function() {
  this.timeout(30000)
  let driver
  let vars
  let fileUrl
  beforeEach(async function() {
    driver = await new Builder().forBrowser('firefox').build()
    let filePath = path.resolve(__dirname, '../src/html/Gestion de tâches 3.html'); 
    fileUrl = 'file://' + filePath;
  })
  afterEach(async function() {
    await driver.executeScript("window.localStorage.clear();");
    await driver.quit();
  })
  it('it add a new task and delete it', async function() {
    await driver.get(fileUrl);
    let addButton = await driver.findElement(By.css("button"));
    assert(addButton);

    const initialElements = await driver.findElements(By.css(".task-item"))
    assert.strictEqual(initialElements.length, 2)


    await driver.findElement(By.id("taskInput")).click()
    await driver.findElement(By.id("taskInput")).sendKeys("nouvelle task")
    await driver.findElement(By.css("button")).click()
    
    const elements = await driver.findElements(By.css(".task-item"))
    assert.strictEqual(elements.length, 3)
    

    await driver.findElement(By.css("button:nth-child(2)")).click()


    const Deleltedelements = await driver.findElements(By.css("button:nth-child(2)"))
    assert.strictEqual(Deleltedelements.length, 2)

    await driver.executeScript("location.reload()")

    const actualElements = await driver.findElements(By.css("button:nth-child(2)"))
    assert.strictEqual(actualElements.length, 2)



  })
  


})
